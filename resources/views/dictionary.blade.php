<?php

// use App\Dictionary;

// $MicrosoftTranslator = new App\Lib\Dictionary;

if(isset($_GET['submit'])){
	$text = htmlspecialchars($_GET['basetext']);
	//文字数長すぎると通らないので分割
	$textArr = str_split(strip_tags($text), 100);

	$result = '';
	foreach($textArr as $val){
		$translator = new MicrosoftTranslator('qOqWYfSUL0GLUzwSsVcDIquSQDcOSLNnVLOmYSZdV5o');
		$translator->translate('en','vi',$val); //英語を日本語に翻訳する

		//JSONで結果とレスポンスが取得できる
		$response = json_decode($translator->response->jsonResponse);

		//stringというタグでマークアップされているので削除
		$result .= str_replace(array('<string xmlns="http://schemas.microsoft.com/2003/10/Serialization/">','</string>'),'',$response->translation);
	}

}

?>

@extends('layouts.default')
@section('content')

    <a href="">[back]</a>
    <div class="module">
		<div class="item">
			<form action="" method="get">
				<h2 style="font-size: 30px;">type english words</h2>
				<textarea name="basetext" id="basetext" cols="30" rows="10" placeholder="english"><?php
						if(isset($_GET['basetext'])){
							echo htmlspecialchars($_POST['basetext']);
						}
					?></textarea>
				<input type="submit" name="submit" value="translate!" />
			</form>
		</div>

		<div class="item">
			<h2 style="font-size: 30px;">result</h2>
			<textarea name="transtext" id="transtext" cols="30" rows="10"><?php
					if(isset($result)){
						echo $result;
					}?>
			</textarea>
		</div>
	</div>

@endsection
