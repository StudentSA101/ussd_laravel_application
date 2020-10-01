<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BusinessLogic\UssdService;

class UssdController extends Controller
{

    public function __construct(UssdService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        echo response($this->service->resolve($request->all()))->header('Content-Type', 'text/plain');
    }
}
