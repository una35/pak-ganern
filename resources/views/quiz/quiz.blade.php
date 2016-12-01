@extends('layouts.default')

@section('content')
<?php

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

$data = [$quiz->answer1, $quiz->answer2, $quiz->answer3, $quiz->answer4];
$correct='<li id="quiz">' . $data[0] . '</li>';

shuffle($data);

//var_dump($correct);

?>

    <div class="row">
      <div class="col-sm-offset-4 col-sm-4">

      </div>

    </div>

    <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
            <h1>Let's try 10 questions</h1>
            <h2>Q. {{ $quiz->question }}</h2>
            <ul class="quiz2">
                <?php foreach($data as $a): ?>
                <li id="quiz"><?= h($a); ?></li>
               <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-offset-5 col-sm-2">
            <h2 id="result"></h2>
        </div>
        <div class="col-sm-offset-1 col-sm-2">
            <a href="/quiz"><div id="btn" class="disabled">NEXT</div></a>
        </div>


    </div>

<script>
    (function(){
        'use strict';

         var answer = String(<?php echo json_encode($correct, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>);
         console.log(answer);
         console.log(typeof answer);

        var x = document.getElementsByTagName('li');
        var count;
        var i;
        var quiz = document.getElementById('quiz');
        var result = document.getElementById('result');

        for(i=6;i<=10;i++){
          var target = x[i].outerHTML;
          if(target==answer){
             x[i].addEventListener( 'click' , function(){
                    console.log("good");
                    // var yeah = document.createElement('h2');
                    // text = document.createTextNode("good");
                    // document.body.appendChild(yeah).appendChild(text);
                    //quiz.textContent='good';
                    result.textContent='correct';
                    result.style.color='#ff1493';
            })
          } else {
             x[i].addEventListener( 'click' , function(){
                    console.log("wrong");
                    result.textContent='wrong';
                    result.style.color='#00bfff';
            })
            }
          }

    })();
</script>


@endsection