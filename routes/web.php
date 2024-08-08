<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});


Route::get('/Corporate-Service', function () {
    return view('pages.corporate');
});

Route::get('/login', function () {
    return view('pages.login');
});
