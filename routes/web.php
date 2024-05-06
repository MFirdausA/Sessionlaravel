<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('session/put','App\Http\Controllers\SessionController@store');
Route::get('session/get','App\Http\Controllers\SessionController@index');
Route::get('session/push','App\Http\Controllers\SessionController@push');
Route::get('session/del','App\Http\Controllers\SessionController@delete');