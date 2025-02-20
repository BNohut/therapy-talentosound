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
use Orchid\Platform\Concerns\Sortable;
use Orchid\Screen\AsSource;

class Organisation extends Model
{
    use AsSource, Filterable, Sortable, Uuid, Attachable, SoftDeletes;

    protected $primaryKey = 'organisation_id';

    protected static function booting()
    {
        parent::booting();
        static::bootingUuid();
    }

    protected $fillable = [
        'user_id',
        'name',
        'logo',
        'province_id',
        'state_id',
        'neighborhood',
        'address',
        'phone',
        'email',
        'social_media_accounts',
        'approved_at'
    ];

    protected $casts = [
        'organisation_id' => 'string',
    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'name' =>  Like::class,
        'email' => Like::class,
        'phone' => Like::class,
    ];


    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'user_id', 'user_id');
    }

    public function attachmentS()
    {
        return $this->hasOne(Attachment::class, 'id', 'logo');
    }
}
