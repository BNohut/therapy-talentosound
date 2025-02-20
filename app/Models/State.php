<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Types\Where;
use Orchid\Platform\Concerns\Sortable;
use Orchid\Screen\AsSource;

class State extends Model
{
    use HasFactory, SoftDeletes, AsSource, Sortable, Filterable, Uuid;

    protected $primaryKey = 'state_id';
    protected $table = 'states';

    protected $casts = [
        'state_id' => 'string',
    ];

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }

    protected $fillable = [
        'name',
        'province_id',
        'neighborhoods',
        'zip_codes'
    ];

    protected $allowedFilters = [
        'state_id' => Where::class,
        'name' => Like::class,
    ];

    protected $allowedSorts = [
        'state_id',
        'name',
    ];

    public function province()
    {
        return $this->hasOne(Province::class, "plate_number", "province_id");
    }
}
