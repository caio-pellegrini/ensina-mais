<?php

namespace App\Models;

use App\Traits\HasDefaultSortable;
use App\Traits\HasNameSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\Sluggable\HasSlug;

class Category extends Model implements Sortable
{
    use HasDefaultSortable;
    use HasFactory;
    use HasNameSlug;
    use HasSlug;
    use SortableTrait;

    protected $fillable = ['name', 'slug', 'description', 'color'];

    public function disciplines()
    {
        return $this->hasMany(Discipline::class);
    }
}
