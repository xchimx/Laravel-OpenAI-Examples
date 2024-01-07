@extends('layouts.app')
@section('content')
    <div class="p-6 bg-slate-100">
        <div class="flex gap-6 mx-auto max-w-3xl bg-white py-6 px-10 rounded-xl">
            <div>
                <h1 class="font-bold mb-4">Generate an Image</h1>

                <form method="POST" action="/image">
                    @csrf
                    <label for="description"></label>
                    <textarea
                        name="description"
                        id="description"
                        cols="30"
                        rows="5"
                        class="border border-gray-600 rounded text-xs p-2"
                        placeholder="A beagle barking at a squirrel in a tree..."
                    ></textarea>

                    <p class="mt-2">
                        <button class="border border-black px-2 rounded hover:bg-blue-500 hover:text-white">Submit
                        </button>
                    </p>
                </form>
            </div>
            <div>
                @if (count($messages))
                    <div class="space-y-6">
                        @foreach(array_chunk($messages, 2) as $chunk)
                            <div>
                                <p class="font-bold text-sm mb-1">{{ $chunk[0]['content'] }}</p>
                                <img src="{{ $chunk[1]['content'] }}" alt="" style="max-width: 250px">
                            </div>
                            <div class="flex flex-row space-x-2">
                                <a target="_blank" href="{{ $chunk[1]['content'] }}">
                                    <button type="button"
                                            class="rounded p-2 bg-gray-200 hover:bg-blue-500 hover:text-white">Show Full
                                    </button>
                                </a>
                                <a download href="{{ $chunk[1]['content'] }}">
                                    <button type="button"
                                            class="rounded p-2 bg-gray-200 hover:bg-blue-500 hover:text-white">Download
                                    </button>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <form action="/image/clear" method="GET" class="w-full lg:max-w-md lg:mx-auto">
                        @csrf
                        <button type="submit" class="rounded p-2 bg-gray-200 hover:bg-blue-500 hover:text-white">Clear
                        </button>
                    </form>
                @else
                    <p>No visualizations yet.</p>
                @endif
            </div>
        </div>
    </div>
@endsection

