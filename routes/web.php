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

Route::get('/e-learning', function () {
    return view('pages.e-learning');
});
Route::get('/corporate-training', function () {
    return view('pages.corporate-training');
});
Route::get('/experience', function () {
    return view('pages.experience');
});

// folder bootcamp
Route::get('/program/bootcamp', function () {
    return view('pages.program.bootcamp');
});

Route::get('/program/digital-marketing', function () {
    return view('pages.program.digital-marketing');
});
// end routes bootcamp


Route::get('/payment', function () {
    return view('pages.payment');
});


Route::get('/elearning', function () {
    return view('pages.elearning');
});

Route::get('/my-profile', function () {
    return view('pages.profile.my-profile');
});




// login or register routes
Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
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
