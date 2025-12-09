<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/biography', function () {
    return view('biography');
});

Route::get('/shows', function () {
    return view('shows');
});

Route::get('/interviews', function () {
    return view('interviews');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/achievements', function () {
    return view('achievements');
});


