<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use Uuid, SoftDeletes;

    protected $primaryKey = 'answer_id';

    protected $casts = [
        'answer_id' => 'string'
    ];

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }

    protected $fillable = [
        'test_id',
        'question_id',
        'user_id',
        'user_test_id',
        'answer',
        'score',
        'options'
    ];

    public function question()
    {
        return  $this->hasOne(Question::class, 'question_id', 'question_id');
    }
}
