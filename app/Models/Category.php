<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use Uuid;
    protected $table = 'audio_categories';
    protected $primaryKey = 'audio_category_id';

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }
    protected $fillable = ['name'];

    protected $casts = [
        'audio_category_id' => 'string'
    ];

    public function audios(): HasMany
    {
        return $this->hasMany(Audio::class, 'category_id', 'audio_category_id');
    }
}
