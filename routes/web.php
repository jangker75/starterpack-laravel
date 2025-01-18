<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['web'],
    'as' => 'admin.',
    'prefix' => 'admin'
],function () {
    Route::get('/home', function () {
        return view('view');
    });
});


// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/logout', function () {
//     return view('logout');
// });

// Route::post('/login',[AuthController::class,'login'])->name('login');
