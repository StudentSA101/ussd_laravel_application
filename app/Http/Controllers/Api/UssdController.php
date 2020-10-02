<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BusinessLogic\UssdService;

class UssdController extends Controller
{
    /**
     * An instance of the UssdService class
     *
     * @param UssdService $service
     */
    public function __construct(UssdService $service)
    {
        $this->service = $service;
    }
    /**
     * An Instance of Laravel Illuminate Request
     *
     * @param Request $request
     * @return String
     */
    public function index(Request $request) : String
    {
        return response($this->service->resolve($request->all()))->header('Content-Type', 'text/plain');
    }
}
