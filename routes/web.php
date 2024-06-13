<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('porto');
});

Route::get('/abt', function () {
    return view('abt');
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/kemampuan', function () {
    return view('kemampuan');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});


