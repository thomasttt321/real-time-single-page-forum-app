<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
 
   // again suppose you had 20 fields or so - antoher  way - // protected $guarded = [];
    protected $fillable = ['title','slug','body','user_id','category_id'];

    public function getRouteKeyName(){   // 2:40 of - think it will search on the slug field instead of id so you can use slug in you urls - but note that it will not work for id if you use this  
        return 'slug';

    }

	// relationships created on our Question model - user, replies, category 
    // question belongs to any user because the user creates a question

    public function user(){ // creating a relationship called user
     	return $this->belongsTo(User::class);  // $this(question belongs )
    } 

    // a question can have many replies 

    public function replies(){
    	return $this->hasMany(Reply::class);	// Reply being the Reply model? 
    }

    // question belongs to category

    public function category(){	
    	return $this->belongsTo(Category::class);
    }

    // need path

    public function getPathAttribute(){
    	return asset("api/question/$this->slug");


    }

}
