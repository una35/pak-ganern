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
    	$data = [$quiz->answer1, $quiz->answer2, $quiz->answer3, $quiz->answer4];
        $correct='<li id="quiz">' . $data[0] . '</li>';
        shuffle($data);
    	return view('quiz.quiz')->with( 'quiz' , $quiz )->with( 'data', $data)->with( 'correct', $correct);
    }

    public function next(Request $request, $quiz){
        if($request->$a == $quiz->answer1){
            redirect('/quiz');
        }else{
        	echo 'wrong';
        }
    }



}





// function h($s) {
//   return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
// }

// $data = [$quiz->answer1, $quiz->answer2, $quiz->answer3, $quiz->answer4];
// $correct='<li id="quiz">' . $data[0] . '</li>';

// shuffle($data);
