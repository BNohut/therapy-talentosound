<?php

namespace App\Models;

use App\Traits\SlugMaker;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;
use Laravel\Scout\Searchable;
use Orchid\Filters\Filterable;
use Illuminate\Support\Str;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Screen\AsSource;

class Blog extends Model
{
    use Uuid, AsSource, SoftDeletes, Searchable, Filterable, SlugMaker, Attachable;

    protected $primaryKey = 'blog_id';
    protected $table = 'blogs';
    protected $dates = ['deleted_at'];

    protected static function booting()
    {
        parent::booting();
        static::bootingSlugMaker();
        static::bootingUuid();
    }

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'subtitle',
        'content',
        'tags',
        'image',
        'approver_user_id',
        'approved_at',
    ];

    protected $casts = [
        'blog_id' => 'string'
    ];

    // Will be used for slug generation in SlugMaker trait
    protected $slugSourceField = 'title';


    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'user_id', 'user_id')->withTrashed();
    }

    public function approver(): HasOne
    {
        return $this->hasOne(User::class, 'user_id', 'approver_user_id')->withTrashed();
    }

    protected function generateSlug()
    {
        $slugSourceField = $this->getSlugSourceField();
        // Log daily
        $logger = Log::channel('daily');
        $logger->info('Slug source field: ' . $slugSourceField);
        $logger->info('Title: ' . $this->title);
        $logger->info('Slug: ' . $this->slug);

        if (empty($this->slug) && !empty($this->{$slugSourceField})) {
            $this->slug = Str::slug($this->{$slugSourceField});
        }
    }

    protected function getSlugSourceField()
    {
        return $this->slugSourceField ?? 'title';
    }
}
