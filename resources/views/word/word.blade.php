@extends( 'layouts.default' )

@section( 'content' )

   <!--  <img src="/image/image8.jpg" class="img8"> -->

    <div id="card">
        <div id="card-front">
            {{ $word->english }}
            <span style="position: absolute; margin-left: 40px; margin-top: 30px;">next</span>
        </div>
        <div id="card-back">{{ $word->tagalog }}</div>
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