@extends('layouts.layout')

@section('content')

<section class="p-16">
    <div class="text-gray-800 text-[30px]">
        New movies
    </div>
    <div class="pt-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-6 gap-5">
        @foreach ($cards as $card)
        <a href="{{ route('movie.show', ['id' => $card['id']]) }}"
            class="rounded overflow-hidden shadow-lg bg-gray-800 hover:opacity-75 transition duration-200">
            <img class="w-full object-cover" src="{{ $card['image'] }}" alt="{{ $card['title'] }}">
            <div class="px-6 py-4">
                <div class="text-white font-bold text-xl mb-2">{{ $card['title'] }}</div>
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
                @foreach ($card['tags'] as $tag)
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $tag }}</span>
                @endforeach
            </div>
        </a>
        @endforeach
    </div>
</section>
@endsection
