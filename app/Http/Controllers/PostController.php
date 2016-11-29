<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use App\todo;


class PostController extends Controller
{
    //

    public function index(){
    	$posts=Post::all();
    	return view('note.note')->with( 'posts' , $posts );
        }

    public function show($id){
    	$post=Post::findOrFail($id);
    	return view('note.show')->with( 'post' , $post );
        }


    public function destroy($id){
    	$post = Post::findOrFail($id);
        $post->delete();
        return redirect('/note');
    }

    public function edit($id){
    	$post = Post::findOrFail($id);
    	return view('note.edit')->with( 'post' , $post );
    }

    public function editsave(Request $request , $id){
    	$post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('/note');
    }

    public function add(Request $request){
    	$post=new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('/note');
    }

}
