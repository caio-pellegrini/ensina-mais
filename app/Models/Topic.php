<?php

namespace App\Models;

use App\Traits\HasNameSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;

class Topic extends Model
{
    use HasFactory;
    use HasNameSlug;
    use HasSlug;

    protected $fillable = ['discipline_id', 'name', 'slug', 'description', 'order', 'is_high_relevance', 'image'];

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function questionsAsPrimary()
    {
        return $this->hasMany(QuestionForum::class, 'topic_primary_id');
    }

    public function questionsAsSecondary()
    {
        return $this->hasMany(QuestionForum::class, 'topic_secondary_id');
    }
}
