@extends('layout')

@section('title', 'Achievements')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Achievements & Recognition</h1>
            <p class="text-xl text-gray-600">Milestones in journalism and media</p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="space-y-8">
                <div class="bg-white rounded-xl shadow-lg p-8 border-l-4 border-blue-900">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-blue-900 rounded-full flex items-center justify-center text-white text-2xl flex-shrink-0">🏆</div>
                        <div>
                            <h3 class="text-2xl font-bold mb-2 text-gray-900">Founder of Reporter's Club Nepal</h3>
                            <p class="text-gray-600">Established an independent platform for journalists and political leaders to interact on current affairs, hosting numerous press meets and civic events.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8 border-l-4 border-blue-700">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-blue-700 rounded-full flex items-center justify-center text-white text-2xl flex-shrink-0">📺</div>
                        <div>
                            <h3 class="text-2xl font-bold mb-2 text-gray-900">Host of Multiple TV Shows</h3>
                            <p class="text-gray-600">Successfully hosting "Bani Bahas" on Nepal Bani Network and "Janata Janna Chahanchhan" on Prime Times Television.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8 border-l-4 border-blue-600">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl flex-shrink-0">🎬</div>
                        <div>
                            <h3 class="text-2xl font-bold mb-2 text-gray-900">Film Appearance</h3>
                            <p class="text-gray-600">Featured in the 2018 Nepali film "Viral Gorkhe", portraying himself as a journalist.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8 border-l-4 border-blue-500">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center text-white text-2xl flex-shrink-0">✍️</div>
                        <div>
                            <h3 class="text-2xl font-bold mb-2 text-gray-900">Columnist & Writer</h3>
                            <p class="text-gray-600">Regular contributor of opinion articles and columns in national newspapers on political and social issues.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-8 border-l-4 border-blue-400">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-blue-400 rounded-full flex items-center justify-center text-white text-2xl flex-shrink-0">🎤</div>
                        <div>
                            <h3 class="text-2xl font-bold mb-2 text-gray-900">Prominent Media Figure</h3>
                            <p class="text-gray-600">Recognized as one of the most influential figures in Nepali broadcast journalism with a distinctive interviewing style.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
