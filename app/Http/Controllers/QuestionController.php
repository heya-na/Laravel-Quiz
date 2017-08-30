<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;
use App\Answer;

class QuestionController extends Controller
{
    public function index()
    {
    	return view('quiz.index');
    }

    public function show(Question $question)
    {
    	return view('quiz.show',compact('question'));
    }

    public function store(Answer $answer)
    {
    	Answer::create([
    		'question_id' => $answer->question_id,
    		'option_id' => $answer->option_id
    	]);

    	return back();
    }
}
