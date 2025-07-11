<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    public function products(){
        return $this->belongsTo('App\Models\Product');
    }
}
