@extends('layouts.default')

@section('content')
<!-- {!! $posts->render() !!} -->
<!-- {!! $posts->links() !!} -->
    <hr>

    <div class="row">
        <div class="col-sm-1">
            <!-- <p style="margin-top: 50px;"><a href="/note/add">[Add New]</a></p> -->
        </div>
        @foreach( $posts as $post )
    	<div class="col-sm-4" style="margin-top: 80px;">
            <div style="background-color: white; width: 500px; margin-top: 10px;">

                <p style="display: inline-block; text-align: right;">{{ $post->updated_at }}</p>

                <a href="/note/{{ $post->id }}"><h1 style="text-align: center;">{{ $post->title }}</h1></a>
                <img src="/image/image1.jpg" style="width:400px; height:200px; padding-left: 100px;">
                <p style="padding-bottom: 50px; text-align: center; margin-top: 30px;">test test test<br>
                <a href="/note/{{ $post->id }}">
                    <button type="button" name="readmore" value="more">
                        <font>READ MORE</font>
                    </button>
                </a>
                </p>
        </div>
        @endforeach
        {!! $posts->links() !!}
        </div>
    </div>


@endsection