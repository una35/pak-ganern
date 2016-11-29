<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Quiz;

class QuizController extends Controller
{
    //

    public function index(){
    	$quiz=Quiz::findOrFail(1);
    	return view('quiz.quiz')->with( 'quiz' , $quiz );
    }

}
