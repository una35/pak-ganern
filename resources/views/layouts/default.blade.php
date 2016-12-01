<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
	<title>Pak ganern!!</title>
    {{Html::script('/js/main.js')}}

<style>
    li a:hover {
    background-color: #afeeee;
}

</style>

<body style="font-family: 'Handlee', cursive;">


    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="collapes navbar-collapse target">
        <ul class="non fixed">
                <li class="nonlist"><a href="/">home</a></li>
                <li class="nonlist"><a href="http://localhost/translate/index.php">dictionary</a></li>
                <li class="nonlist"><a href="/word">word</a></li>
                <li class="nonlist"><a href="/quiz">quiz</a></li>
                <li class="nonlist"><a href="{{ url('/note') }}">note</a></li>
                <li class="nonlist"><a href="/todo">todo</a></li>
            </ul>
            </div>
    </nav>


</head>
    @yield('top')
    <div class="container same">
    	@yield('content')
    </div>
</body>
</html>