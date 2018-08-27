<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{

	// relationships created on our Question model - user, replies, category 
    // question belongs to any user because the user creates a question

    public function user(){ // creating a relationship called user
     	return $this->belongsTo(User::class);  //
    } 

    // a question can have many replies 

    public function replies(){
    	return $this->hasMany(Reply::class);	// Reply being the Reply model? 
    }

    // querstion belongs to category

    public function category(){	
    	return $this->belongsTo(Category::class);


    }
}
