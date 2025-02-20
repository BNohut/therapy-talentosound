<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Types\Where;
use Orchid\Screen\AsSource;

class Audio extends Model
{
    use AsSource, Attachable, Filterable, Uuid, SoftDeletes;

    protected $primaryKey = 'audio_id';

    protected $table = 'audios';

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }

    protected $fillable = [
        'category_id',
        'name',
        'duration',
        'audio'
    ];

    protected $casts = [
        'audio_id' => 'string'
    ];

    protected $allowedFilters = [
        'name' => Like::class,
        'duration' => Where::class,
    ];

    public function categoryS(): HasOne
    {
        return $this->hasOne(Category::class, 'audio_category_id', 'category_id');
    }

    public function attachmentS()
    {
        return $this->hasOne(Attachment::class, 'id', 'audio');
    }
}
