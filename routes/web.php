<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return "oi";
    // return view('welcome');
});
