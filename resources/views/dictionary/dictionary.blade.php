@extends('layouts.default')

@section('content')

    <div class="row">
    	<div class="col-sm-offset-2 col-sm-4">
    		<h2>English to Tagalog</h2>
    		<form method="post" action="{{ url( '/dictionary/search' ) }}">
    	        {{ csrf_field() }}
    	        <p><input type="text" name="english" placeholder="type an English word"></p>
                <input type="reset" value="reset">
                <input type="submit" value="search" class="search">

    		</form>

<div class="search">
    {!! Form::open(['method' => 'GET']) !!}
    {!! Form::input('検索する', 'q', null) !!}
    {!! Form::close() !!}
</div>






    	</div>

    	<div class="col-sm-4">
    		<h2>Tagalog to English</h2>
            <form method="post" action="">
    	        {{ csrf_field() }}
    	        <p><input type="text" name="" placeholder="type a Tagalog word"></p>
                <input type="reset" value="reset">
                <input type="submit" value="search" class="search">

    		</form>
    	</div>
    </div>
<div class="col-sm-offset-2 col-sm-4">
    <div class="row">
        <div class="col-sm-offset-2 col-sm-4">
        	@if($search)

        	@else

        	@endif


        </div>

   </div>



@endsection