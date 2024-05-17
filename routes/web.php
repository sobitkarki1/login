<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first', function () {
    return view('first');
});

Route::get('/second', function () {
    return view('second');
});
