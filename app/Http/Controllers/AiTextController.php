<?php

namespace App\Http\Controllers;

use App\AI\Assistant;
use Illuminate\Http\Request;

class AiTextController extends Controller
{
    public function index()
    {
        return view('poem');
    }

    public function store()
    {
        $chat = new Assistant();
        $chat
            ->systemMessage('You are a poetic assistant, skilled in explaining complex programming concepts with creative flair.')
            ->send('Compose a poem that explains the concept of recursion in programming.');
        $sillyPoem = $chat->reply('cool, can you make it much, much more sillier?');

        return view('poem', ['poem' => $sillyPoem ?? []]);
    }

}
