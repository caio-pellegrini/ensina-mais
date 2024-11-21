<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionForum extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'discipline_id', 'question','topic_id', 'answer_forums'];

    public function user()
    {
        return $this->belongsTo(User::class);
        
    }

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id');
    }

    public function answers()
    {
        return $this->hasMany(AnswerForum::class, 'question_forum_id');
    }

}
