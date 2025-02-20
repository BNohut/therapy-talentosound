<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use Uuid, SoftDeletes;

    protected $primaryKey = 'question_id';

    protected $casts = [
        'question_id' => 'string'
    ];

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }

    protected $fillable = [
        'test_id',
        'type',
        'title',
        'items',
        'options'
    ];

    public function test()
    {
        return  $this->hasOne(Test::class, 'test_id', 'test_id');
    }
}
