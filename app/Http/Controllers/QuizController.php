<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Quiz;

class QuizController extends Controller
{
    //

    public function index(){
    	$id=rand(1,5);
    	$quiz=Quiz::findOrFail($id);
    	return view('quiz.quiz')->with( 'quiz' , $quiz );

        }

}
