@extends('layouts.default')

@section('content')

        <img src="/image/image7.JPG" class="img6">

    <div class="row mtt">
        <div class="col-sm-3 fs20">
            <p><a href="/note" class="mtt">[back]</a></p>
        </div>
    	<div class="col-sm-6">
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