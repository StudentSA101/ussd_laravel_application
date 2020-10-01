<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Could not figure out whether there is a way to switch off the automatic instantiation of classes.
        // Therefore hooked into injection and replaced the $code with values
        $this->app->when('App\BusinessLogic\UssdService')->needs('$codes')->give(function ($app){
            $codes = config('codes');
            foreach(config('codes') as $key => $code){
                $codes[$key] = str_replace(['phoneNumber'], $app->request->input('phoneNumber'), $code);
            }
            return $codes;
        });
    }
}
