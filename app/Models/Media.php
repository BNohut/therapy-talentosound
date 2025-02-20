<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Models\Attachment;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class Media extends Model
{
    use AsSource, Uuid, Attachable;

    protected $primaryKey = 'media_id';
    protected $table = 'medias';

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }

    protected $casts = [
        'media_id' => 'string',
    ];

    protected $fillable = [
        'user_id',
        'title',
        'attachment',
        'url',
        'description'
    ];

    public function attachmentS()
    {
        return $this->hasOne(Attachment::class, 'id', 'attachment');
    }
}
