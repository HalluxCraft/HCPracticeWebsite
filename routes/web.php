<?php

use Illuminate\Support\Facades\Route;

/* Laravel
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('home.home');
});