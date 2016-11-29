@extends('layouts.default')

@section('top')

		<div class="bimage" style="opacity: 0.5;  background-image: url('http://greenyouth.dothome.co.kr/wp-content/uploads/2014/10/aa4-1400x500.png'); background-attachment: fixed; width: 1450px; height: 500px;">
</div>




            <p class="hello">
                <b><font color="#e2041b">S</font>abay tayong mag aral</b><br>
    			Let's study <font color="#e2041b">T</font>agalog together!<br>
    			Why am <font color="#e2041b">i</font> studying Tagalog??<br>
    			<font color="#e2041b">M</font>any people might think it's <font color="#e2041b">u</font>seless...<br>
    			Yesh it's useless given my career..haha<br>
    			<font color="#e2041b">B</font>ut I don't care my career <font color="#e2041b">w</font>hen I study language.<br>
    			I use language <font color="#e2041b">for</font> a communication tool!<br>
    			<font color="#e2041b">M</font>ag-aral ka <font color="#e2041b">n</font>ang mabuti



    		</p>
    	</div>

@endsection
@section('content')
  <!--   <div class="row">
        <div class="col-sm-offset-3 col-sm-3">
        	<h2>what are you gonna do today??</h2>
        	<form action="{{ url('/') }}" method="post">
        	    {{ csrf_field() }}
        		<input type="text" name="todo" placeholder="what are you gonna do today??" style="font-size: 15px;" style="white-space: nowrap;">
        		<input type="submit" value="add" class="form-inline text-right">
        	</form>

       	<ul>
        	    @forelse( $todos as $todo )
        		    <li class="todo">
        		        <font size="5px">{{ $todo->todo }}</font>
        		        <div class="fs15 inline"><a href="{{ action('TodoController@destroy', $todo->id) }}" onclick="return confirm('Are you sure you are done this item?');">[done!]</a></div>
        		    </li>
        		@empty
                    <li>Nothing to do</li>
        		@endforelse
        	</ul>
        </div>


        <div class="col-sm-3 today" style="margin-left: 100px;">
            <img src="http://vector-sozai.up.n.seesaa.net/vector-sozai/image/tate.jpg?d=a881422" style="width: 300px; height: 400px; ">
        	<h2 class="vocab1" style="border-bottom: solid;  border-width: 1px; padding-bottom: 1px;">today's vocab</h2>
        	<div class="fs30 vocab2">{{ $today->tagalog }} = {{ $today->english }}</div>
        </div>
    </div>

    <div class="row" style="margin-top: 100px;">
    	<div class="col-sm-offset-3 col-sm-4">

    	</div>

    </div>
    -->

@endsection
