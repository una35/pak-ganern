@extends('layouts.default')

@section('content')
        <img src="/image/image9.jpg" class="img9">

    <div class="row pl70 mt">
    	<div class="col-sm-offset-2 col-sm-4">
    		<u class="memo">
                @foreach( $posts as $post )
    			    <a href="/note/{{ $post->id }}"><li class="fs20">{{ $post->title }}</li></a>
                @endforeach
    		</u>

    	</div>

    	<div class="col-sm-4">
    	    <form action=" {{ url( '/note' ) }} " method="post">
                {{ csrf_field() }}
    	        <input type="text" name="title" placeholder="title">
    	        <p></p>
    		    <textarea placeholder="take a note here!" name="body" style="width: 300px; height: 500px;"></textarea>
    		    <p><input type="submit" value="save"></p>
            </form>
    	</div>


    </div>

@endsection