<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script|Molle:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Josefin+Sans" rel="stylesheet">
	<title>Pak ganern!!</title>
    {{Html::script('/js/main.js')}}

</head>

<body style="font-family: 'Josefin Sans', sans-serif; background-color: #f3f0f0">

    <nav class="navbar navbar-fixed-top" style="background-color: #002537;">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".target">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse target">
            <ul class="nav navbar-nav">
                <li class="nav"><a href="/main">home</a></li>
                <!-- <li class="nav"><a href="/dictionary">dictionary</a></li> -->
                <li class="nav"><a href="http://localhost/translate/index.php">dictionary</a></li>
                <li class="nav"><a href="/word">word</a></li>
                <li class="nav"><a href="/quiz">quiz</a></li>
                <li class="nav"><a href="{{ url('/note') }}">blog</a></li>
                <li class="nav"><a href="/todo">todo</a></li>
            </ul>
        </div>
    </nav>

    @if (session('flash_message'))
      <div class="flash_message" onclick="this.classList.add('hidden')">{{ session('flash_message') }}</div>
    @endif
        @yield('top')
    <div class="container same">
    	@yield('content')
    </div>

<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>