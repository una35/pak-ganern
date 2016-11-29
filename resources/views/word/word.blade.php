@extends( 'layouts.default' )

@section( 'content' )

    <div id="card">
        <div id="card-front">{{ $word->tagalog }}</div>
        <div id="card-back">{{ $word->english }}</div>
    </div>


    <form method="post" action="/word">
        {{ csrf_field() }}
        <input type="submit" value="NEXT" id="btn" style="margin-left: 460px;">
    </form>

    <a href="/word/add" class="fs20">[make new card!]</a>


<script>

console.log( "hello" );

  (function() {
    'use strict';

    var card = document.getElementById('card');
    card.addEventListener('click', function() {
      flip();
    });

    function flip() {
      card.className = card.className === '' ? 'open' : '';
    }

  })();





  </script>


@endsection