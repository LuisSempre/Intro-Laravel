<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controller\HomeController::class, 'index']{
});
