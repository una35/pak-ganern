@extends('layouts.default')

@section('content')

    <div class="row pt70">
    	<div class="col-sm-offset-3 col-sm-6">
    		<p><a href="/note/{id}" class="fs12">[back]</a></p>
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