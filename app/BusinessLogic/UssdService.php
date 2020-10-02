<?php

namespace App\BusinessLogic;

use Exception;

class UssdService
{
    /**
     * An associative array containing codes as keys and strings as values
     *
     * @var Array $codes
     */
    private $codes;

    public function __construct($codes)
    {
        $this->codes = $codes;
    }
    /**
     * An array containing the request input values
     *
     * @param Array $request
     * @return string
     */
    public function resolve($request) : String
    {
        try {
            return $this->codes[(String) $request['text']];
        } catch (Exception $e){
            return $this->codes['invalid'];
        }
    }

}
