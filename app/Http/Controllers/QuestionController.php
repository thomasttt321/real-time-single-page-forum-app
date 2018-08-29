<?php

namespace App\Http\Controllers;

use App\Model\Question;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\QuestionResource;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Question::latest()->get();  // Question is the model and returns an array

        return QuestionResource::collection(Question::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storag
    public function create()
    {
        //
    }
e.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // 
    {
        // pass all the fields we want to store first way - but this is long-winded if you have x fields to deal with 


/*
        $question = new Question;  // create a new instance of question 
        $question->title = $request->title; // 
        $question->slug = $request->slug; // ....
        $question->save();

        */

        // so a better way would be - and this would be a post request @3:25 and do not forget to use mass assignemtn with this create method 
        auth()->user()->question()->create($request->all());  // this way user_id will automatically get filled becuase there is a relationshiop between the user and question table - note the syntax 
       // Question::create($request->all());  // model::create(pass in all fields from the Request object)
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)  //    if we provide the id of the question, laravel will search and get 
    {
        // so if you return 
       // return $question;  // question/1 - 10 ... note that your route would be /api/question/{question}

        return new QuestionResource($question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)  // again route model binding - and this would e a delete request
    {
        //
        $question->delete();
        return response(null, Response::HTTP_NO_CONTENT);

    }
}
