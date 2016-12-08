<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

// use App\Dictionary;

use App\Lib\MicrosoftTranslator;

class DictionaryController extends Controller
{

    public function index(){
        $MicrosoftTranslator = new MicrosoftTranslator;
        $MicrosoftTranslator->translate($from, $to, $text, $format = 'Raw' );
        $MicrosoftTranslator->sanitize($text);
        $MicrosoftTranslator->getSuccessResponse($response, $selectBox = '');
        $MicrosoftTranslator->getErrorResponse($response, $reason , $param);
        $MicrosoftTranslator->getRequest($type);
        $MicrosoftTranslator->getContext();
        return view('dictionary');
    }



}



// use App\Http\Requests;

// public function index(){
//         $MyClass = new \App\Lib\MyClass;
//         $MyClass->foo();
//         return view('welcome');
//     }