<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Models\Attachment;

class Page extends Model
{
    use AsSource, Uuid, Attachable;

    protected $primaryKey = 'page_id';
    protected $table = 'pages';

    protected $casts = [
        'page_id' => 'string',
    ];

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }

    protected $fillable = [
        'user_id',
        'slug',
        'title',
        'content',
        'image'
    ];

    public function attachmentS()
    {
        return $this->hasOne(Attachment::class, 'id', 'image');
    }
}
