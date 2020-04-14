<?php

use Illuminate\Support\Facades\Route;

Route::get('/', AppController::class);

Route::get('/event', function () {
    event(new \App\Events\Application\MessageReceivedEvent('test'));
});
