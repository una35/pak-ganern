<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dictionary;

use App\Libs\MicrosoftTranslator;

class DictionaryController extends Controller
{
    //

    public function vi($from=null, $to=null, $text=null, $format=null, $selectBox=null, $response=null, $reason=null, $param=null, $type=null, $file=null, $toCache=null){
    $obj = new MicrosoftTranslator;
    $obj->translate($from, $to, $text, $format = 'Raw' );
    $obj->sanitize($text);
    $obj->getSuccessResponse($response, $selectBox = '');
    $obj->getErrorResponse($response, $reason , $param);
    $obj->getRequest($type);
    $obj->getContext();
    return view('dictionary')->with('obj' , $obj);
    }




}