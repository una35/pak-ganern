@extends('layouts.default')

@section('content')

        <img src="/image/image5.JPG" class="img5">


    <div class="row mtt">
        <div class="col-sm-3"><p><a href="/note" style="font-size: 20px;">[back]</a></p></div>
    	<div class="col-sm-6" style="margin-top: 60px;">
    		<form action="{{ url('/note', $post->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('patch') }}
    			<p><input type="text" name="title" value=" {{ $post->title }} "></p>
                <textarea name="body" style="width: 300px; height: 500px;">{{ $post->body }}</textarea>
                <br>
                <input type="submit" value="save">
    		</form>


    	</div>

    </div>

@endsection