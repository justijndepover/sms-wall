<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

abstract class DashboardEvent implements ShouldBroadcastNow
{
    public function broadcastOn()
    {
        // return new PrivateChannel('dashboard'); Auth required?
        return new Channel('dashboard');
    }
}
