@extends('layouts.default')

@section('content')

        <p class="mt15"><a href="/note" class="fs15">[back]</a></p>
    <div class="row pt90">
    	<div class="col-sm-offset-3 col-sm-6">

    		<p class="fs30">{!! $post->title !!}
    		<a href="{{ action('PostController@edit', $post->id) }}" class="fs15">[edit]</a>
    		<a href="{{ action('PostController@destroy', $post->id) }}" onclick="return confirm('Are you sure you want to delete this item?');" class="fs15">[delete]</a></p>
    		<br>
            <p class="fs20">{!! $post->body !!}</p>
    	</div>

    </div>

@endsection