<?php

namespace App\Actions;

use App\Models\Message;
use App\Events\Application\MessageReceivedEvent;

class CreatenewMessageAction
{
    public static function execute($message)
    {
        $newMessage = new Message();
        $newMessage->message = $message;
        $newMessage->save();
        event(new MessageReceivedEvent($newMessage->message));
    }
}