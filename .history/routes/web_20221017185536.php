<?php

use Illuminate\Support\Facades\Route;

Route::get('/users/{paramA}/{paramB}', function ($paramB, $paramA) {
    return $paramA . '-' . $paramB;
    // return view('welcome');
});
