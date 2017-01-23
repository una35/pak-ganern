@extends('layouts.default')

@section('content')



    <div class="row">
        <div class="col-sm-2 fs15" style="margin-top: 25px;">
            <p><a href="/note">[back]</a></p>
        </div>
    	<div class="col-sm-4" style="background-color: white; width: 500px; margin-top: 10px; padding-bottom: 100px;">
            <br>
            <br>
            <br>
            <p class="fs30">{!! $post->title !!}
    		<a href="{{ action('PostController@edit', $post->id) }}" class="fs15">[edit]</a>
    		<a href="{{ action('PostController@destroy', $post->id) }}" onclick="return confirm('Are you sure you want to delete this item?');" class="fs15">[delete]</a></p>
    		<br>
            <p class="fs20">{!! nl2br(e($post->body)) !!}</p>
    	</div>
    </div>

@endsection