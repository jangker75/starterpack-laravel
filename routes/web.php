<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('view');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('logout');
});
