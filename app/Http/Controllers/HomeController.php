<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        public function index(){
        $todos=todo::all();
        $id=rand(1,20);
        $today=Dictionary::findOrFail($id);
        return view('index')->with( 'todos' , $todos )
                            ->with('today' , $today);
    }
}
