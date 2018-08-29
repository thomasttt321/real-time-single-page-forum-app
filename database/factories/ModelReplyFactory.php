<?php

use Faker\Generator as Faker;
use App\Model\Question;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Model\Reply::class, function (Faker $faker) {
  

    return [

        'body' => $faker->text,
        'question_id' => function(){
            return Question::all()->random();
        },

        'user_id' => function(){
             return \App\User::all()->random();
        }

    	
    ];
});
