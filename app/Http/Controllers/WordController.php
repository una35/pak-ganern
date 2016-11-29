<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dictionary;

class WordController extends Controller
{
    //

    public function index(){
    	$id=rand(1,20);
    	$word=Dictionary::findOrFail($id);
    	return view('word.word')->with('word' , $word);
    }

    public function add(Request $request){
    	$word=new Dictionary();
    	$word->english=$request->english;
    	$word->tagalog=$request->tagalog;
    	$word->save();
    	return view('word.add');
    }

}
