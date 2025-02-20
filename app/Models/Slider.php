<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Slider extends Model
{
    use SoftDeletes, Uuid, Attachable, Filterable, Searchable, AsSource;

    protected $primaryKey = 'slide_id';
    protected $table = 'sliders';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id',
        'title',
        'subtitle',
        'content',
        'image',
        'link',
        'status'
    ];

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }

    protected $casts = [
        'slide_id' => 'string'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'user_id')->withTrashed();
    }
}
