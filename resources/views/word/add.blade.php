@extends( 'layouts.default' )

@section( 'content' )

<!--  <img src="/image/image8.jpg" class="img8"> -->

<div class="mt15">
    <a href="/word" class="fs20">[back]</a>


    <h2>Add new cards!</h2>

    <form action="/word/add" method="post">
        {{ csrf_field() }}
    	<input type="text" name="tagalog" placeholder="tagalog">
    	<input type="text" name="english" placeholder="english">
    	<input type="submit" value="SAVE">
    </form>
</div>

@endsection