<?php

use Illuminate\Support\Facades\Route;



// pages routes here
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
});
//cv routes
Route::get('/review', function () {
    return view('pages.cv.review');
});

//Corporate Routes
Route::get('/corporate-service', function () {
    return view('pages.corporate.corporate');
});
Route::get('/corporate-training', function () {
    return view('pages.corporate.corporate-training');
});
Route::get('/experience', function () {
    return view('pages.corporate.experience');
});

// folder bootcamp
Route::get('/bootcamp', function () {
    return view('pages.program.bootcamp');
});

Route::get('/bootcamp/digital-marketing', function () {
    return view('pages.program.digital-marketing');
});
// end routes bootcamp

// e learning Routes
Route::get('/e-learning', function () {
    return view('pages.e-learning.e-learning');
});
Route::get('/payment', function () {
    return view('pages.e-learning.payment');
});



// login or register routes
Route::get('/login', function () {
    return view('pages.auth.login');
});

Route::get('/register', function () {
    return view('pages.auth.register');
});

// Profile Routes
Route::get('/my-profile', function () {
    return view('pages.profile.my-profile');
});
Route::get('/profile/my-purchase', function () {
    return view('pages.profile.my-purchase');
});

Route::get('/profile/my-activity', function () {
    return view('pages.profile.my-activity');
});

Route::get('/profile/my-transaction', function () {
    return view('pages.profile.my-transaction');
});
