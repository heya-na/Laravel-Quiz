<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

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
}
