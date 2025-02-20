<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Where;
use Orchid\Screen\AsSource;

class Session extends Model
{
    use Uuid, AsSource, Attachable, Filterable;

    protected $primaryKey = 'session_id';

    protected $table = 'sessions';

    protected $casts = [
        'session_id' => 'string'
    ];

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }

    protected $fillable = [
        'user_id',
        'package_id',
        'audio_id',
        'duration',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'player_time'
    ];

    protected $appends = [
        'url'
    ];

    protected $allowedFilters = [
        'duration' => Where::class,
    ];

    public function userS()
    {
        return $this->hasOne(User::class, 'user_id', 'user_id');
    }

    public function audioS()
    {
        return $this->hasOne(Audio::class, 'audio_id', 'audio_id');
    }

    public function getUrlAttribute()
    {
        $audio = Audio::where('audio_id', $this->audio_id)->first();
        $attachment = Attachment::where('id', $audio->audio)->first();
        return $attachment->url;
    }
}
