@extends('layouts.app')
@section('content')
    <div class="flex flex-row p-6 bg-slate-100">
        <div class="flex flex-col gap-6 mx-auto max-w-3xl bg-white py-6 px-10 rounded-xl">
            <p class="text-xl">Choose the example above:</p>
            <hr>
            <p class="text-lg"><strong>Text:</strong> creates a poem and makes it funnier in the second step</p>
            <p class="text-lg"><strong>Audio:</strong> lets you prank a person or object and gives you an audio message
                back</p>
            <p class="text-lg"><strong>Image:</strong> lets you create images based on your text and expand them in the
                second step.</p>
            <p class="text-lg"><strong>or</strong></p>
            <p class="text-lg"><strong>Chatbot:</strong> you can also talk direct to the AI Chatbot via console:
                "<strong>php artisan chat</strong>"</p>
            <hr>
            <p class="text-xl text-red-500">Warning don't forget to set the OPENAI_API_KEY and the OPENAI_ORGANIZATION
                Key in the env</p>
            <hr>
            <p class="text-md">Created by <a target="_blank" href="https://schottstaedt.net/">Tobias Schottstädt -
                    https://schottstaedt.net/</a> | Get another examples at <a target="_blank"
                                                                               href="https://github.com/xchimx?tab=repositories">GitHub</a>
            </p>
        </div>
    </div>
@endsection
