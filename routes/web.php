<?php

use Illuminate\Support\Facades\Route;



// pages routes here
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/review', function () {
    return view('pages.review');
});

Route::get('/corporate-service', function () {
    return view('pages.corporate');
});
Route::get('/corporate-training', function () {
    return view('pages.corporate-training');
});
Route::get('/experience', function () {
    return view('pages.experience');
});
Route::get('/bootcamp', function () {
    return view('pages.bootcamp');
});

Route::get('/payment', function () {
    return view('pages.payment');
});


Route::get('/elearning', function () {
    return view('pages.elearning');
});





// login or register routes
Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});
