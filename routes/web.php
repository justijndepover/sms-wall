<?php

use Illuminate\Support\Facades\Route;

Route::get('/', AppController::class);
Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', HomeController::class)->name('home');
    Route::get('/history', HistoryController::class)->name('history');
});