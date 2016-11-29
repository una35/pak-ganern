<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dictionary;

class DictionaryController extends Controller
{
    //

    public function index(){
    	$search=Dictionary::all();
    	return view('dictionary.dictionary')->with( 'search' , $search );
        }

    public function search(Request $request){
    	$word=Dictionary::findOrFail($request);
        $word->tagalog=$request->english;

    	return view('dictonary.dictionary');
        }

/*
public function getsearch(){
	$query = Request::get('q');

	if ($query) {
		$posts = Dictionary::where('english', 'LIKE', "%$query%")->get();
	}else{
		$posts = Dictionary::all();
	}

	return View::make('dictonary.dictionary')->with('posts', $posts);
} */


}