<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Types\Where;
use Orchid\Screen\AsSource;

class Package extends Model
{
    use AsSource, Filterable, Uuid;

    protected $primaryKey = "package_id";

    protected $table = 'packages';

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }

    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'audios',
    ];

    protected $casts = ['package_id' => 'string'];

    protected $allowedFilters = [
        'name' => Like::class,
    ];

    public function userS(): HasOne
    {
        return $this->hasOne(User::class, 'user_id', 'user_id');
    }

    public function sessionS(): HasMany
    {
        return $this->hasMany(Session::class, 'package_id', 'package_id');
    }

    public function getUserNameAttribute()
    {
        if (!$this->user_id) return null;
        $user = User::where('user_id', $this->user_id)->first();
        return $user->name;
    }

    public function getCountAttribute()
    {
        if (!$this->audios) return null;
        $count = count(json_decode($this->audios));
        return $count;
    }
}
