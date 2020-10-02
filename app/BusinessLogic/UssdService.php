<?php

namespace App\BusinessLogic;

use Exception;

class UssdService
{
    private $codes;

    public function __construct($codes)
    {
        $this->codes = $codes;
    }

    public function resolve($request)
    {
        try {
            return $this->codes[(String) $request['text']];
        } catch (Exception $e){
            return $this->codes['invalid'];
        }
    }

}
