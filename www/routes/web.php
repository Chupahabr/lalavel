<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


Route::get('/{any}', function () {
    return view('index');
})->where('any', '.*');

//Auth::routes();

//Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
