<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});


Route::get('/bootcamp', function () {
    return view('pages.bootcamp');
});

Route::get('/elearning', function () {
    return view('pages.elearning');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});
