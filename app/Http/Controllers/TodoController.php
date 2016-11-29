<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\todo;

use App\Today;

use App\Dictionary;

class TodoController extends Controller
{
    //
    public function index(){
    	$todos=todo::all();
    	$id=rand(1,20);
    	$today=Dictionary::findOrFail($id);
    	return view('index')->with( 'todos' , $todos )
    	                    ->with('today' , $today);
    }

    public function store(Request $request){
    	$todo = new todo();
    	$todo->todo = $request->todo;
    	$todo->save();
    	return redirect('/todo');
    }

    public function destroy($id){
    	$todo = todo::findOrFail($id);
    	$todo->delete();
        return redirect('/todo');
    }

    public function todo(){
        $todos=todo::all();
        return view('todo')->with( 'todos' , $todos );

    }


}
