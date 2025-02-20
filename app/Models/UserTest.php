<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;


class UserTest extends Model
{
    use Uuid, SoftDeletes;

    protected $primaryKey = 'user_test_id';
    protected $table = 'user_test';

    protected $casts = [
        'user_test_id' => 'string'
    ];

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }

    protected $fillable = [
        'user_id',
        'test_id',
        'status',
    ];

    public function test()
    {
        return  $this->hasOne(Test::class, 'test_id', 'test_id');
    }

    public function user()
    {
        return  $this->hasOne(User::class, 'user_id', 'user_id');
    }
}
