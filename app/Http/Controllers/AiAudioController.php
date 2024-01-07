<?php

namespace App\Http\Controllers;

use App\AI\Assistant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AiAudioController extends Controller
{
    public function index()
    {
        return view('roast', []);
    }

    public function store()
    {
        $attributes = request()->validate([
            'topic' => [
                'required', 'string', 'min:2', 'max:50'
            ]
        ]);

        $mp3 = (new Assistant())->send(
            message: "Please roast {$attributes['topic']} in a sarcastic way.",
            speech: true
        );

        $name = md5($mp3);
        Storage::disk('public')->put('roasts/' . $name . '.mp3', $mp3);
        $file = Storage::url('roasts/' . $name . '.mp3');

        return redirect('/roast')->with([
            'file' => $file,
            'flash' => 'Boom, roasted!'
        ]);
    }
}
