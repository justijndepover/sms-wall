<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\User;

Broadcast::channel('dashboard', function (User $user) {
    return true;
});
