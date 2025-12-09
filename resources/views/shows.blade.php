@extends('layout')

@section('title', 'TV Shows')

@section('content')
<section class="py-16 bg-gradient-to-br from-blue-50 to-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">TV Shows</h1>
            <p class="text-xl text-gray-600">Bringing truth to the people through television</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                <div class="h-64 bg-gradient-to-br from-red-600 to-red-800 flex items-center justify-center">
                    <span class="text-white text-6xl">▶️</span>
                </div>
                <div class="p-8">
                    <h2 class="text-3xl font-bold mb-4 text-gray-900">Bani Bahas</h2>
                    <p class="text-gray-600 mb-4">Nepal Bani Network</p>
                    <p class="text-gray-700 mb-6">A flagship talk show featuring direct and hard-hitting interviews with political leaders, policymakers, and influential personalities. Known for its bold questioning and unfiltered discussions on national issues.</p>
                    <div class="flex gap-4">
                        <a href="#" class="bg-blue-900 text-white px-6 py-2 rounded-lg hover:bg-blue-800 transition">Watch Episodes</a>
                        <a href="#" class="border-2 border-blue-900 text-blue-900 px-6 py-2 rounded-lg hover:bg-blue-900 hover:text-white transition">Schedule</a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                <div class="h-64 bg-gradient-to-br from-blue-900 to-blue-700 flex items-center justify-center">
                    <span class="text-white text-6xl">🎙️</span>
                </div>
                <div class="p-8">
                    <h2 class="text-3xl font-bold mb-4 text-gray-900">Janata Janna Chahanchhan</h2>
                    <p class="text-gray-600 mb-4">Prime Times Television</p>
                    <p class="text-gray-700 mb-6">A people-centric program that brings citizens' questions and concerns directly to political leaders. This show bridges the gap between the government and the public through transparent dialogue.</p>
                    <div class="flex gap-4">
                        <a href="#" class="bg-blue-900 text-white px-6 py-2 rounded-lg hover:bg-blue-800 transition">Watch Episodes</a>
                        <a href="#" class="border-2 border-blue-900 text-blue-900 px-6 py-2 rounded-lg hover:bg-blue-900 hover:text-white transition">Schedule</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
