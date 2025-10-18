<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcom');
});
Route::get('/about', function () {
    return view('pages.about');
});
