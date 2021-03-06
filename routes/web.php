<?php

use Illuminate\Support\Facades\Route;


Route::get('user/verify/{verification_code}', 'AuthController@verifyUser');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@postReset')->name('password.reset');
Route::post('productos/create', 'ProductosController@create');

// Route::get('/', function () {
//     return view('welcome');
// });
