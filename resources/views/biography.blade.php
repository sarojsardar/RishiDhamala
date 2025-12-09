@extends('layout')

@section('title', 'Biography')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="w-32 h-32 bg-white rounded-full mx-auto mb-6 flex items-center justify-center">
                <i class="fas fa-user text-6xl text-blue-900"></i>
            </div>
            <h1 class="text-5xl font-bold mb-4">Rishi Dhamala</h1>
            <p class="text-xl text-blue-100">Journalist | Media Personality | Political Leader</p>
            <p class="text-lg text-blue-200 mt-2">Janadesh Party Nepal</p>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-xl shadow-lg p-8 md:p-12 mb-8">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-blue-900 rounded-lg flex items-center justify-center">
                        <i class="fas fa-quote-left text-2xl text-white"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900">About</h2>
                </div>
            
                <p class="text-xl text-gray-700 mb-6 leading-relaxed bg-blue-50 p-6 rounded-lg border-l-4 border-blue-900">Rishi Dhamala (born Durga Raj Dhamala; November 12, 1970) is a Nepalese journalist, media personality, and political leader. He is the founder and chairman of the Reporter's Club Nepal and the leader of Janadesh Party Nepal.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 bg-blue-900 rounded-lg flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Early Life</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">Born in Dhading District, Nepal, Dhamala moved to Kathmandu to pursue education and a career in journalism. He became active in the media sector during the early years of Nepal's multiparty democracy in the 1990s.</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 bg-blue-900 rounded-lg flex items-center justify-center">
                            <i class="fas fa-briefcase text-xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Career Start</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">Began as a reporter and quickly became one of the prominent figures in Kathmandu's media circles. Founded the Reporter's Club Nepal, an independent platform for journalists and political leaders.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 md:p-12 mb-8">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-red-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-tv text-2xl text-white"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900">Media Career</h2>
                </div>
                <p class="text-gray-700 mb-6 leading-relaxed">Dhamala hosts several popular talk shows including <strong>Bani Bahas</strong> on Nepal Bani Network and <strong>Janata Janna Chahanchhan</strong> on Prime Times Television. His interviewing style is recognized for being direct and impactful.</p>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="bg-blue-50 p-4 rounded-lg text-center">
                        <div class="text-3xl font-bold text-blue-900 mb-2">25+</div>
                        <p class="text-gray-600">Years in Media</p>
                    </div>
                    <div class="bg-blue-50 p-4 rounded-lg text-center">
                        <div class="text-3xl font-bold text-blue-900 mb-2">1000+</div>
                        <p class="text-gray-600">Interviews</p>
                    </div>
                    <div class="bg-blue-50 p-4 rounded-lg text-center">
                        <div class="text-3xl font-bold text-blue-900 mb-2">100+</div>
                        <p class="text-gray-600">Awards</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 md:p-12 mb-8">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-blue-900 rounded-lg flex items-center justify-center">
                        <i class="fas fa-flag text-2xl text-white"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900">Political Journey</h2>
                </div>
                <p class="text-gray-700 leading-relaxed mb-4">Founder and leader of Janadesh Party Nepal, committed to bringing transparency, accountability, and progressive change to Nepali politics. His political vision focuses on education reform, job creation, healthcare access, and corruption-free governance.</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 md:p-12">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 bg-blue-900 rounded-lg flex items-center justify-center">
                        <i class="fas fa-heart text-2xl text-white"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900">Personal Life</h2>
                </div>
                <p class="text-gray-700 leading-relaxed">Dhamala is married to Alpha Dhamala, who is also a media professional. They have two children. Outside journalism and politics, he is actively involved in social and community development activities.</p>
            </div>
        </div>
    </div>
</section>
@endsection
