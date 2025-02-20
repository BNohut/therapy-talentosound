<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Types\Where;
use Orchid\Filters\Types\WhereDateStartEnd;
use Orchid\Platform\Models\User as Authenticatable;
use Illuminate\Support\Str;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Models\Attachment;

class User extends Authenticatable
{
    use SoftDeletes, Attachable, Filterable, AsSource, Uuid;

    // id
    protected $primaryKey = 'user_id';
    protected $table = 'users';
    protected $dates = ['deleted_at'];

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'permissions',
        'phone',
        'birthday',
        'avatar',
        'specialist_id',
        'organisation_id',
        'organisation_approved_at',
        'identity_no',
        'gender',
        'graduate',
        'title',
        'child_identity_no',
        'child_name',
        'child_gender',
        'child_birthyear',
        'resource',
        'province_id',
        'state_id',
        'is_listed',
        'country_phone_code',
        'link',
        'about_me'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'permissions',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'string',
        'permissions' => 'array',
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'user_id'         => Where::class,
        'name'       => Like::class,
        'email'      => Like::class,
        'phone'      => Like::class,
        'birthday'    => Where::class,
        'updated_at' => WhereDateStartEnd::class,
        'created_at' => WhereDateStartEnd::class,
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'user_id',
        'name',
        'email',
        'updated_at',
        'created_at',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->user_id) {
                $model->{$model->primaryKey} = (string) Str::uuid();
            }
        });
    }

    public function scopeManager(Builder $query)
    {
        return $query->join('role_users', 'users.user_id', '=', 'role_users.user_id')
            ->join('roles', 'role_users.role_id', '=', 'roles.id')
            ->leftJoin('organisations', 'users.user_id', '=', 'organisations.user_id')
            ->where('roles.slug', 'yonetici')
            ->whereNull('organisations.user_id')
            ->select('users.*')
            ->get();
    }
    public function scopeAdmins(Builder $query)
    {
        return $query->join('role_users', 'users.user_id', '=', 'role_users.user_id')
            ->join('roles', 'role_users.role_id', '=', 'roles.id')
            ->whereIn('roles.slug', ['super-yonetici', 'admin'])
            ->select('users.*');
    }

    public function scopeSpecialists(Builder $query)
    {
        return $query->join('role_users', 'users.user_id', '=', 'role_users.user_id')
            ->join('roles', 'role_users.role_id', '=', 'roles.id')
            ->whereIn('roles.slug', ['uzman', 'kurum-uzmani']);
    }

    public function scopeOnlySpecialist(Builder $query)
    {
        return $query->join('role_users', 'users.user_id', '=', 'role_users.user_id')
            ->join('roles', 'role_users.role_id', '=', 'roles.id')
            ->where('roles.slug', 'uzman')
            ->orderBy('users.created_at', 'desc')
            ->select('users.*');
    }

    public function scopePatient(Builder $query)
    {
        return $query->join('role_users', 'users.user_id', '=', 'role_users.user_id')
            ->join('roles', 'role_users.role_id', '=', 'roles.id')
            ->where('roles.slug', 'danisan')
            ->select('users.*');
    }

    public function scopeSpecialistAndPatient(Builder $query)
    {
        return $query->join('role_users', 'users.user_id', '=', 'role_users.user_id')
            ->join('roles', 'role_users.role_id', '=', 'roles.id')
            ->whereIn('roles.slug', ['uzman', 'kurum-uzmani', 'danisan'])
            ->orWhereNotNull('users.deleted_at');
    }

    public function attachmentS()
    {
        return $this->hasOne(Attachment::class, 'id', 'avatar');
    }

    public function getIdentityNoAttribute()
    {

        if (!$this->attributes['identity_no']) {
            return null;
        }
        return kg_decrypt($this->attributes['identity_no']);
    }
    public function getChildIdentityNoAttribute()
    {

        if (!$this->attributes['child_identity_no']) {
            return null;
        }
        return kg_decrypt($this->attributes['child_identity_no']);
    }

    public function getOrganisationNameAttribute()
    {
        if (!$this->organisation_id) return null;
        $organisation = Organisation::where('organisation_id', $this->organisation_id)->withTrashed()->first();
        return $organisation->name;
    }
    public function getProvinceAttribute()
    {
        if (!$this->province_id) return null;
        $province = Province::where('province_id', $this->province_id)->withTrashed()->first();
        return $province->name;
    }

    public function specialist()
    {
        return $this->hasOne(User::class, 'user_id', 'specialist_id');
    }

    public function packages()
    {
        return  $this->belongsTo(UserPackage::class, 'user_id', 'user_id');
    }

    public function patients()
    {
        return $this->hasMany(User::class, 'specialist_id', 'user_id');
    }

    public function getPatientPackagesAttribute()
    {
        $patients = $this->hasMany(User::class, 'specialist_id', 'user_id')->get();
        $patientIds = $patients->pluck('user_id');
        return UserPackage::whereIn('user_id', $patientIds);
    }
}
