@extends('layouts.layout')

@section('content')

<div class="border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <div class="flex-none">
            <img src="{{ $movie->image }}" alt="{{ $movie->title }}" class="w-64 lg:w-96">
        </div>
        <div class="md:ml-24">
            <h2 class="text-4xl mt-4 md:mt-0 font-semibold">{{ $movie->title }}</h2>
            <div class="flex flex-wrap items-center text-gray-400 text-sm">
                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                <span class="ml-1">7,6</span>
                <span class="mx-2">|</span>
                <span>29-05-2023</span>
                <span class="mx-2">|</span>
                <span>drama</span>
            </div>

            <p class="text-gray-700 mt-8">
                {{ $movie->description }}
            </p>
        </div>
    </div>
</div> 

<div class="container mx-auto px-4 py-16">
    <h2 class="text-3xl text-gray-400 mb-4">Other Movies</h2>
    <div class="regular slider mx-auto">
        @foreach ($otherMovies as $otherMovie)
        <a href="{{ route('movie.show', ['id' => $otherMovie->id]) }}"
            class="rounded overflow-hidden shadow-lg bg-gray-800">
            <img class="w-full" src="{{ $otherMovie->image }}" alt="{{ $otherMovie->title }}">
            <div class="px-6 py-4">
                <div class="text-white font-bold text-xl mb-2">{{ $otherMovie->title }}</div>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24">
                        <g data-name="Layer 2">
                            <path
                                d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                data-name="star" />
                        </g>
                    </svg>
                    <span class="ml-1">7,6</span>
                    <span class="mx-2">|</span>
                    <span>29-05-2023</span>
                    <span class="mx-2">|</span>
                    <span>drama</span>
                </div>
            </div>
            <div class="px-6 pt-4 pb-2">
                @foreach (explode(',', $movie->tags) as $tag)
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $tag }}</span>
                @endforeach
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
