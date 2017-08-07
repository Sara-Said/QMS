<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LkpQuestionsType extends Model
{
     protected $table='lkp_questions_type';
    protected $fillable = [
         'type', 'created_at', 'updated_at'
    ];
}
