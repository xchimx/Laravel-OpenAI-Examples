<?php

namespace App\Http\Controllers;

use App\AI\Assistant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AiImageController extends Controller
{
    public function index()
    {
        return view('image', [
            'messages' => session('messages', [])
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'description' => ['required', 'string', 'min:3']
        ]);

        $assistant = new Assistant(session('messages', []));

        $assistant->visualize($attributes['description']);

        session(['messages' => $assistant->messages()]);

        return redirect('/image');
    }

    public function clear()
    {
        session()->forget('messages');

        return view('image', [
            'messages' => session('messages', [])
        ]);
    }
}
