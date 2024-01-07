@extends('layouts.app')
@section('content')
    @if (session('file'))
        <div>
            <iframe src="https://giphy.com/embed/RdKjAkFTNZkWUGyRXF" width="480" height="256" frameBorder="0"
                    class="giphy-embed" allowFullScreen></iframe>
            <p></p>
            <a href="{{ asset(session('file')) }}" download
               class="block w-full text-center rounded p-2 bg-gray-200 hover:bg-blue-500 hover:text-white mt-2">Download
                Audio</a>
            <audio class="block w-full text-center rounded p-2 bg-gray-200 hover:bg-blue-500 hover:text-white mt-2"
                   controls>
                <source src="{{ asset(session('file')) }}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    @else
        <form action="/roast" method="POST" class="w-full lg:max-w-md lg:mx-auto">
            @csrf
            <div class="flex space-x-2">
                <label>
                    <input type="text" name="topic" placeholder="What do you want us to roast?" required
                           class="border p-2 rounded w-64">
                </label>
                <button type="submit" class="rounded p-2 bg-gray-200 hover:bg-blue-500 hover:text-white">Roast</button>
            </div>
        </form>
    @endif
@endsection
