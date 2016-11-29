@extends('layouts.default')

@section('content')

    <div class="row pt70">
    	<div class="col-sm-offset-3 col-sm-6">
    		<p class="fs30">{!! $post->title !!}
    		<a href="{{ action('PostController@edit', $post->id) }}" class="fs12">[edit]</a>
    		<a href="{{ action('PostController@destroy', $post->id) }}" onclick="return confirm('Are you sure you want to delete this item?');" class="fs12">[delete]</a></p>
    		<br>
            <p class="fs20">{!! $post->body !!}</p>
    	</div>

    </div>

@endsection