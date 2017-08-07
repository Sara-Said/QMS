<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quize extends Model
{
    //
   
    protected $fillable = [
        'name', 'category_id', 'time','total_points','pass_points','created_at','updated_at'
    ];
    
    public function category() 
    {
        return $this->belongsTo('App\LkpCategory');
    }
}
