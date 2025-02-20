<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;

class Test extends Model
{
    use Uuid, Attachable, SoftDeletes;

    protected $primaryKey = 'test_id';

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }

    protected $fillable = [
        'name',
        'min_age',
        'max_age',
        'attachment',
        'json'
    ];

    protected $casts = [
        'test_id' => 'string'
    ];

    public function attachmentS()
    {
        return $this->hasOne(Attachment::class, 'id', 'attachment');
    }
}
