@extends( 'layouts.default' )

@section( 'content' )
    <div class="row">
        <div class="col-sm-2" style="margin-top: 50px;">
        	<a href="/note" class="mtt">[back]</a>
        </div>
    	<div class="col-sm-5 pt100">
    		<form action=" {{ url( '/addnew' ) }} " method="post">
                {{ csrf_field() }}
    	        <input type="text" name="title" placeholder="title">
    	        <p></p>
                <textarea placeholder="content" name="body" style="width: 300px; height: 500px;"></textarea>
                <p><input type="submit" value="save"></p>
            </form>
    	</div>
    </div>
@endsection