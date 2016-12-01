@extends('layouts.default')

@section('top')

<div class="bc">

		<div class="bimage" style="opacity: 0.5;  background-image: url('https://02mhh4i42s-flywheel.netdna-ssl.com/wp-content/uploads/2000/06/ChrisOutsideMngmt-1400x500.jpg'); background-attachment: fixed; width: 1450px; height: 500px; ">
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




<p style="position: relative;">
        <p class="quoto">
        <br>
        don't let anyone's ignorance,<br>
        hate, or negativity<br>
        stop you from being<br>
        the best person you can be<br></p>

        <img src="/image/image2.jpg" class="img2">

        <img src="/image/image1.jpg" class="img1">

        <p class="mahal">Nandito lang ako,<br>
        kapag kailangan mo ng kaibigan,<br>
        ng makakausap, ng maiiyakan..<br>
        Sabi ko kasi sayo iwan mo na siya eh..<br>
        Ano bang nakita mo sa kanya?</p>

        <img src="/image/image3.jpg" class="img3">

        <img src="/image/image4.jpg" class="img4">

        <p class="gusto">Ikaw yung pinakamagandang<br>
        bagay na dumating sa akin,<br>
        kaya hinding hindi ko hahayaan<br>
        na basta basta ka na lang mawawala sakin.</p>

</p>














@endsection
