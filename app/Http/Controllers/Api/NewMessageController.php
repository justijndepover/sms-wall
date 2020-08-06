<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\CreateNewMessageAction;

class NewMessageController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'author' => ['required'],
            'message' => ['required'],
        ]);

        CreateNewMessageAction::execute($request->author, $request->message);
    }
}
