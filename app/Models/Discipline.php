<?php

namespace App\Models;

use App\Traits\HasDefaultSortable;
use App\Traits\HasNameSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\Sluggable\HasSlug;

class Discipline extends Model implements Sortable
{
    use HasDefaultSortable;
    use HasFactory;
    use HasNameSlug;
    use HasSlug;
    use SortableTrait;

    protected $fillable = ['name', 'slug', 'description', 'category_id', 'order', 'icon', 'material_link', 'material_info'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(User::class, 'teachers_disciplines');
    }

    public function questions()
    {
        return $this->hasMany(QuestionForum::class);
    }
}
