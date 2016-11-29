@extends( 'layouts.default' )

@section( 'content' )

<div class="mt15">
    <a href="/word" class="mt15; fs20">[back]</a>


    <h2>Add new cards!</h2>

    <form action="/word/add" method="post">
        {{ csrf_field() }}
    	<input type="text" name="tagalog" placeholder="tagalog">
    	<input type="text" name="english" placeholder="english">
    	<input type="submit" value="SAVE">
    </form>
</div>

@endsection