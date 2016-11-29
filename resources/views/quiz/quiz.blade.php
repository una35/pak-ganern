@extends('layouts.default')

@section('content')
<?php

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

$data = [$quiz->answer1, $quiz->answer2, $quiz->answer3, $quiz->answer4];
$correct=$data[0];

shuffle($data);


var_dump($correct);
//
?>

    <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
            <h1>Let's try 10 questions</h1>
            <h2>Q. {{ $quiz->question }}</h2>
            <ul class="quiz2">
                <?php foreach($data as $a): ?>
                <li id="quiz"><?= h($a); ?></li>
               <?php endforeach; ?>
            </ul>
        <div id="btn" class="disabled">NEXT</div>
        </div>
    </div>

<script>
    (function(){
        'use strict';

         var answer = <?php echo json_encode($correct, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;
         console.log(answer);

        var quiz = document.getElementById('quiz');
        var x = document.getElementsByTagName('li');

        // answer.addEventListener( 'click' , function(){
        //     console.log("good");
        // });
        console.log("x");
        console.log(x);

        var i;
        for(i=6;i<=9;i++){
          console.log(x[i]);
          console.log(x.cellIndex)
        }

        console.log(answer);

    })();
</script>


@endsection