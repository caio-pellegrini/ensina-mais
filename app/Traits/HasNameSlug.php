<?php

namespace App\Traits;

use Spatie\Sluggable\SlugOptions;

trait HasNameSlug
{
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
