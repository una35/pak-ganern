@extends('layouts.default')

@section('content')

        <!-- <img src="/image/image7.JPG" class="img6"> -->

        <div class="col-sm-offset-3 col-sm-3">
        	<h2>what are you gonna do today??</h2>
        	<form action="{{ url('/todo') }}" method="post">
        	    {{ csrf_field() }}
        		<input type="text" name="todo" placeholder="what are you gonna do today??" style="font-size: 15px;" style="white-space: nowrap;">
        		<p><input type="submit" value="add" class="form-inline text-right"></p>
        	</form>

       	    <ul>
        	    @forelse( $todos as $todo )
        		    <li class="todo">
        		        <font size="5px">{{ $todo->todo }}</font>
        		            <div class="fs15 inline">
                                <a href="{{ action('TodoController@destroy', $todo->id) }}" onclick="return confirm('Are you sure you are done this item?');" style="color: darkblue !important; font-size: 15px;">[done!]</a>
                        </div>
        		    </li>
        		@empty
                    <li>Nothing to do</li>
        		@endforelse
        	</ul>
        </div>

            <p class="tamad">abala ka or tamad ka??</p>

@endsection