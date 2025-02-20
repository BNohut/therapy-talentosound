<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Types\Where;
use Orchid\Filters\Types\WhereDateStartEnd;
use Orchid\Platform\Concerns\Sortable;
use Orchid\Screen\AsSource;

class Province extends Model
{
    use HasFactory, SoftDeletes, AsSource, Filterable, Sortable, Uuid;

    protected $primaryKey = 'province_id';
    protected $table = 'provinces';

    protected $casts = [
        'province_id' => 'string',
    ];

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }

    protected $fillable = [
        'name',
        'plate_number',
        'phone_code',
        'tax_offices'
    ];

    protected $allowedFilters = [
        'province_id'            => Where::class,
        'name'          => Like::class,
        'plate_number'  => Where::class,
        'phone_code'    => Where::class,
        'created_at'    => WhereDateStartEnd::class,
        'deleted_at'    => WhereDateStartEnd::class,
    ];

    protected $allowedSorts = [
        'province_id',
        'name',
        'plate_number',
        'phone_code',
    ];

    public function state()
    {
        return $this->hasMany(State::class, 'province_id', 'plate_number');
    }
}
