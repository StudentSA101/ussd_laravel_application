<?php

return [

    /*
    |--------------------------------------------------------------------------
    | codes configuration for ussd program
    |--------------------------------------------------------------------------
    |
    | Here you may configure your ussd application by creating key value pairs
    | consisting of the ussd shortcode and returning value
    |
    | To learn more: https://account.africastalking.com/apps/sandbox/ussd/codes
    |
    */

    '' =>   "CON Welcome Client, what would you want to check \n" .
            "1. My Account \n" .
            "2. My phone number",
    '1' =>  "CON Choose account information you want to view \n" .
            "1. Account Number \n" .
            "2. Account Balance \n",
    '2' =>  "END Your phone number is phoneNumber \n",
    '1*1' => "END Your account number is ACC1001\n",
    '1*2' => "END Your balance is USD 10.78\n",
    'invalid' => "END an invalid selection has been made."
];
