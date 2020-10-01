<?php

namespace App\BusinessLogic;

use Exception;

class UssdService
{
    private $codesToText;

    public function __construct($codes)
    {
        $this->codesToText = $codes;
    }

    public function resolve($request)
    {
        try {
            return $this->codesToText[(String) $request['text']];
        } catch (Exception $e){
            return $this->codesToText['invalid'];
        }
    }

}
