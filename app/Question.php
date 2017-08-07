<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';
     protected $fillable = [
        'question', 'question_type_id', 'category_id','points','created_at','updated_at'
    ];
    
    public function category() 
    {
        return $this->belongsTo('App\LkpCategory');
    }
    
    public function question_type() 
    {
        return $this->belongsTo('App\LkpQuestionsType');
    }
}
