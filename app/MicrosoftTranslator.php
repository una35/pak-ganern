<?php

namespace App\Lib;

class MicrosoftTranslator{


const SUCCESS = 'SUCCESS';

const ERROR = 'ERROR';

const UNEXPECTED_ERROR = 'UNEXPECTED_ERROR';

const MISSING_ERROR = 'MISSING_ERROR';

const TRANSLATE = 'Translate';


private $serviceRootURL = 'https://api.datamarket.azure.com/Data.ashx/Bing/MicrosoftTranslator/v1/';

private $accountKey = '';

private $context = '';

private $requestInvoked = '';

private $from = '';

private $to = '';

private $format = '';

private $top = '100';

private $textToTranslate = '';

public $response = '';


public function __construct($accountKey)
{
    $this->accountKey = $accountKey;
    $this->context = $this->getContext();
}

public function translate($from, $to, $text, $format = 'Raw' )
{

    $this->from = (!empty($this->from )) ? $this->sanitize($from) : '';
    $this->to = $this->sanitize($to);
    $this->textToTranslate = $this->sanitize($text);
    $this->format = $format;
    $request = $this->getRequest(self::TRANSLATE );

    $response = file_get_contents( $request, 0, $this->context );

    if(!empty($response) && isset($response)){
        $this->getSuccessResponse($response);
    } else {
        $this->getErrorResponse($response, self::UNEXPECTED_ERROR, $missing );
    }

}

private function sanitize($text){
    $text = urlencode("'".$text."'");
    return $text;
}

private function getSuccessResponse($response, $selectBox = ''){
    $this->response = new stdClass();
    $this->response->status = self::SUCCESS;
    if($this->requestInvoked == self::TRANSLATE ) {
        $this->response->translation = $response;
        if($this->format == 'Raw') {
            $this->response->jsonResponse = !function_exists('json_decode') ? $this->response : json_encode($this->response);
        }
    }  elseif($this->requestInvoked == self::GET_LANG ) {
        $this->response->languageSelectBox = $this->getSelectBox($response,$selectBox);

    }
}

private function getErrorResponse($response, $reason , $param){

    $this->response = new stdClass();
    $this->response->status = self::ERROR ;
    $this->response->errorReason = str_replace("%s", $param, $reason);
    $this->response->jsonResponse = !function_exists('json_decode') ? $this->response : json_encode($this->response);


}

private function getRequest($type)
{
    $this->requestInvoked = $type;
    $text = (!empty($this->textToTranslate)) ? 'Text='.$this->textToTranslate : '';
    $to = (!empty($this->to)) ? $to = '&To='. $this->to : '';
    $from = (!empty($this->from)) ? '&From='. $this->from : '';
    $format = '$format='.$this->format;
    $top = '$top='.$this->top;
    $params = $text . $from . $to .'&'. $format .'&'. $top ;
    if($type == self::TRANSLATE ) {
        $request = $this->serviceRootURL. $type.'?'. $params;
    } elseif ($type == self::GET_LANG ){
        $request = $this->serviceRootURL. $type.'?'. $top.'&'. $format;
    }

    return $request ;
}

private function getContext()
{
    $context = stream_context_create(array(
        'http' => array(
            'request_fulluri' => true,
            'header'  => "Authorization: Basic " . base64_encode($this->accountKey . ":" . $this->accountKey)
        )
    ));

    return $context;
}


}