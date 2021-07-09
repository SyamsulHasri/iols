<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('referral')->group(function () {
    Route::get('/{refer_id}', function () {
        return view('welcome');
    });
});

Route::get('login', function () {
    return view('auth.login');
});



Route::prefix('system')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    });
});
