<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LkpCategory extends Model
{
    protected $table='lkp_category';
    protected $fillable = [
        'name', 'code', 'created_at'
    ];
}
