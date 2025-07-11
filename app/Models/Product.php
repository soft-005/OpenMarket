<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
   
   
   use SoftDeletes,HasFactory;
   
   protected $fillable = [
        'title','content','featured','category_id','slug'
    ];
    protected $dates = [
        'deleted_at'
    ];
    
    //acessor
    public function getFeaturedAttribute($featured){
        return asset($featured);
    }
     //
    public function category(){
       return $this->belongsTo('App\Models\Category');
    }
    
    //
    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }

    public function review(){
        return $this->hasMany('App\Models\Review');
    }
}
