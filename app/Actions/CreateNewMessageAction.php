<?php

namespace App\Actions;

use App\Models\Message;
use App\Events\Application\MessageReceivedEvent;

class CreateNewMessageAction
{
    public static function execute($author, $message)
    {
        $newMessage = new Message();
        $newMessage->author = $author;
        $newMessage->message = $message;
        $newMessage->save();
        event(new MessageReceivedEvent($newMessage->message));
    }
}