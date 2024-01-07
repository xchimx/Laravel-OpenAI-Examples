@extends('layouts.app')
@section('content')
    <div class="flex flex-row p-6 bg-slate-100">
        <div class="flex flex-col gap-6 mx-auto max-w-3xl bg-white py-6 px-10 rounded-xl">
            <form method="POST" action="/poem">
                @csrf
                <label for="description"></label>
                <p class="mt-2">
                    <button class="border border-black px-2 rounded hover:bg-blue-500 hover:text-white">get a poem
                    </button>
                </p>
            </form>
        </div>
        <div class="flex flex-col gap-6 mx-auto max-w-3xl bg-white py-6 px-10 rounded-xl">
            @isset($poem)
                <div>
                    {!! nl2br($poem) !!}
                </div>
            @endisset
        </div>
    </div>

@endsection

