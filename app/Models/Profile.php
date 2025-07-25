<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id','avater'];


    public function getAvaterAttribute($avater){
        return asset($avater);
    }

    //
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
