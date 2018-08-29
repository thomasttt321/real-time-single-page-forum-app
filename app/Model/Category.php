<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
   protected $guarded = [];

   // but we want the slug 
    public function getRouteKeyName(){

    	/// return the field name which is slug

    	return slug;
    }
}
