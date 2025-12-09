@extends('layout')

@section('title', 'Interviews')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Notable Interviews</h1>
            <p class="text-xl text-gray-600">Conversations that shaped public discourse</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @for($i = 1; $i <= 9; $i++)
            <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
                <div class="h-48 bg-gray-300"></div>
                <div class="p-6">
                    <div class="text-sm text-blue-900 font-semibold mb-2">Political Interview</div>
                    <h3 class="text-xl font-bold mb-3">Interview with Political Leader {{ $i }}</h3>
                    <p class="text-gray-600 mb-4">In-depth discussion on national policies, governance, and future vision for Nepal.</p>
                    <a href="#" class="text-blue-900 font-semibold hover:text-blue-700">Watch Interview →</a>
                </div>
            </article>
            @endfor
        </div>
    </div>
</section>
@endsection
