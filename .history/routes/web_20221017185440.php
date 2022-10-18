<?php

use Illuminate\Support\Facades\Route;

Route::get('/users/{paramA}/{paramB}', function () {
    return "oi";
    // return view('welcome');
});
