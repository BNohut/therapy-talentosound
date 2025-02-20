<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Orchid\Screen\AsSource;

use function PHPUnit\Framework\isEmpty;

class UserPackage extends Model
{
    use Uuid, SoftDeletes, AsSource;

    protected $primaryKey = 'user_package_id';
    protected $table = 'user_package';

    protected $casts = [
        'user_package_id' => 'string'
    ];

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }

    protected $fillable = [
        'name',
        'slug',
        'audios',
        'user_id',
        // 'package_id',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'sms',
        'email',
        'description',
        'status',
    ];

    public static function boot()
    {
        parent::boot();

        static::retrieved(function ($model) {
            $model->status = $model->status == 1 ? true : false;
        });

        static::deleted(function ($model) {
            $sessions = Session::where('user_package_id', $model->user_package_id)->get();
            foreach ($sessions as $session) {
                $session->delete();
            }
        });
    }

    // public function package()
    // {
    //     return  $this->hasOne(Package::class, 'package_id', 'package_id');
    // }

    public function user()
    {
        return  $this->hasOne(User::class, 'user_id', 'user_id');
    }

    public function counts()
    {
        $all = Session::where('user_package_id', $this->user_package_id)->get()->count();
        $completed = Session::where('user_package_id', $this->user_package_id)->whereNotNull('end_time')->get()->count();
        $uncompleted = Session::where('user_package_id', $this->user_package_id)->whereNull('end_time')->where('is_missed', 0)->get()->count();
        $delayed = Session::where('user_package_id', $this->user_package_id)->where('is_delayed', 1)->get()->count();
        $missed = Session::where('user_package_id', $this->user_package_id)->where('is_missed', 1)->get()->count();

        return [
            'all' => $all,
            'completed' => $completed,
            'uncompleted' => $uncompleted,
            'delayed' => $delayed,
            'missed' => $missed,
        ];
    }
}
