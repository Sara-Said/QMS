<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    protected $table = 'quiz_questions';
     protected $fillable = [
        'question_id', 'quiz_id', 'created_at','updated_at'
    ];
    
    public function question() 
    {
        return $this->belongsTo('App\Question');
    }
    
    public function quiz() 
    {
        return $this->belongsTo('App\Quize');
    }
}
