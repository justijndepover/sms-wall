<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function __invoke()
    {
        return Message::orderBy('created_at', 'desc')->paginate();
    }
}
