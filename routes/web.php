<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});


Route::get('/bootcamp', function () {
    return view('pages.bootcamp');
});
