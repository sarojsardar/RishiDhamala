@extends('layout')

@section('title', 'Photo Gallery')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Photo Gallery</h1>
            <p class="text-xl text-gray-600">Moments captured from various events and activities</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @for($i = 1; $i <= 16; $i++)
            <div class="relative overflow-hidden rounded-lg shadow-lg group h-64">
                <img src="https://via.placeholder.com/300x400" alt="Gallery {{ $i }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                    <p class="text-white font-semibold">Event {{ $i }}</p>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>
@endsection
