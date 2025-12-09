@extends('layout')

@section('title', 'Articles')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Articles & Opinion</h1>
            <p class="text-xl text-gray-600">Insights on politics, media, and society</p>
        </div>

        <div class="max-w-4xl mx-auto space-y-6">
            @for($i = 1; $i <= 8; $i++)
            <article class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition">
                <div class="flex items-start gap-6">
                    <div class="w-32 h-32 bg-blue-100 rounded-lg flex-shrink-0"></div>
                    <div class="flex-1">
                        <div class="text-sm text-gray-500 mb-2">December {{ $i }}, 2024</div>
                        <h2 class="text-2xl font-bold mb-3 text-gray-900">Article Title {{ $i }}: Political Analysis</h2>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                        <a href="#" class="text-blue-900 font-semibold hover:text-blue-700">Read Full Article →</a>
                    </div>
                </div>
            </article>
            @endfor
        </div>
    </div>
</section>
@endsection
