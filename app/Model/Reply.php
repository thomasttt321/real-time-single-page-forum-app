<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    // relationships on our Reply model

    // reply belongsTo question

    public function question(){
    	return $this->belongsTo(Question::class);

    }

    // every reply is created by some user - reply belongsTo user

    public function user(){
    	return $this->belongsTo(User::class);

    }
// every reply can have many liles
    public function like(){
    	return $this->hasMany(Like::class);

    }
}
