@extends('layouts.layout')

@section('content')
<div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-5">
    @foreach ($cards as $card)
    <a href="{{ route('movie.show', ['id' => $card['id']]) }}" class="rounded overflow-hidden shadow-lg">
        <img class="w-full object-cover" src="{{ $card['image'] }}" alt="{{ $card['title'] }}">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ $card['title'] }}</div>
            <p class="text-gray-700 text-base">{{ $card['description'] }}</p>
        </div>
        <div class="px-6 pt-4 pb-2">
            @foreach ($card['tags'] as $tag)
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $tag }}</span>
            @endforeach
        </div>
    </a>
    @endforeach
</div>
@endsection

