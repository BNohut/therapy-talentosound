<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

trait SlugMaker
{
    protected static function bootingSlugMaker()
    {
        static::creating(function ($model) {
            $model->generateSlug();
        });

        static::saving(function ($model) {
            $model->generateSlug();
        });
    }
}
