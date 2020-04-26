<?php

use Illuminate\Support\Facades\Route;

Route::get('/', AppController::class);

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
