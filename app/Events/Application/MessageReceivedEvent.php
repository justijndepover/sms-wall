<?php

namespace App\Events\Application;

use App\Events\DashboardEvent;

class MessageReceivedEvent extends DashboardEvent
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }
}
