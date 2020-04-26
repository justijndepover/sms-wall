<?php

namespace App\Console\Commands;

use App\Actions\CreateNewMessageAction;
use Illuminate\Console\Command;

class CreateNewMessageCommand extends Command
{
    protected $signature = 'application:message';
    protected $description = 'Create a new message';

    public function handle()
    {
        $author = $this->ask('Who is the author?');
        if (empty($author)) {
            $this->error('The author field is required.');
            return 1;
        }

        $message = $this->ask('What is the message?');
        if (empty($message)) {
            $this->error('The message field is required.');
            return 1;
        }

        CreateNewMessageAction::execute($author, $message);
    }
}
