@extends('layouts.default')

@section('content')


    <div class="row">
        <div class="col-sm-2">
            <p style="margin-top: 50px;"><a href="/note/add">[Add New]</a></p>
        </div>
    	<div class="col-sm-4" style="margin-top: 100px;">
    		<u class="memo">
                @foreach( $posts as $post )
    			    <a href="/note/{{ $post->id }}"><li class="fs20">{{ $post->title }}</li></a>
                @endforeach
    		</u>
        </div>
    </div>

@endsection