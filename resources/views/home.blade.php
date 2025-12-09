@extends('layout')

@section('title', 'Home')

@section('content')

    <!-- Hero Section -->
    <section class="relative h-[600px] bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900" style="background-image: url('{{ asset('front/images/rishi-dhamala-film.jpg') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-blue-900 bg-opacity-70"></div>
        <div class="container mx-auto px-4 h-full flex items-center relative z-10">
            <div class="text-white max-w-3xl">
                <div class="inline-block bg-red-600 text-white px-6 py-2 rounded-full font-bold mb-4 animate-pulse">
                    <i class="fas fa-vote-yea"></i> ELECTION 2025
                </div>
                <div class="text-2xl font-bold mb-4 text-yellow-400">
                    <i class="fas fa-flag"></i> Janadesh Party Nepal
                </div>
                <h2 class="text-5xl md:text-6xl font-bold mb-6">A Voice You Trust, A Leader Who Delivers</h2>
                <p class="text-xl mb-8">From fearless journalism to dedicated public service - bringing transparency, accountability, and real change to Nepal</p>
                <div class="flex gap-4">
                    <a href="/contact" class="bg-red-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-red-700 transition"><i class="fas fa-hand-holding-heart"></i> Support Campaign</a>
                    <a href="/biography" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-900 transition"><i class="fas fa-user"></i> Know Your Candidate</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gradient-to-br from-blue-50 via-white to-blue-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-3">Campaign Achievements</h2>
                <p class="text-gray-600">Proven track record of service and dedication</p>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-blue-900">
                    <div class="absolute top-4 right-4 text-5xl opacity-10 group-hover:opacity-20 transition-opacity"><i class="fas fa-users"></i></div>
                    <div class="text-6xl font-bold text-blue-900 mb-3 group-hover:scale-110 transition-transform">50K+</div>
                    <p class="text-gray-700 font-semibold text-lg">Supporters</p>
                </div>
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-blue-900">
                    <div class="absolute top-4 right-4 text-5xl opacity-10 group-hover:opacity-20 transition-opacity"><i class="fas fa-handshake"></i></div>
                    <div class="text-6xl font-bold text-blue-900 mb-3 group-hover:scale-110 transition-transform">100+</div>
                    <p class="text-gray-700 font-semibold text-lg">Community Projects</p>
                </div>
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-blue-900">
                    <div class="absolute top-4 right-4 text-5xl opacity-10 group-hover:opacity-20 transition-opacity"><i class="fas fa-map-marked-alt"></i></div>
                    <div class="text-6xl font-bold text-blue-900 mb-3 group-hover:scale-110 transition-transform">75+</div>
                    <p class="text-gray-700 font-semibold text-lg">Districts Visited</p>
                </div>
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-blue-900">
                    <div class="absolute top-4 right-4 text-5xl opacity-10 group-hover:opacity-20 transition-opacity"><i class="fas fa-bullhorn"></i></div>
                    <div class="text-6xl font-bold text-blue-900 mb-3 group-hover:scale-110 transition-transform">200+</div>
                    <p class="text-gray-700 font-semibold text-lg">Campaign Rallies</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Campaign Updates -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-3">Campaign Updates</h2>
                <p class="text-gray-600">Latest news from the campaign trail</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative h-56 overflow-hidden bg-gradient-to-br from-blue-100 to-blue-200">
                        <div class="absolute top-4 left-4 bg-red-600 text-white px-4 py-1 rounded-full text-sm font-semibold"><i class="fas fa-bullhorn"></i> Rally</div>
                    </div>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">December 9, 2024</div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Massive Rally in Kathmandu: Thousands Show Support</h3>
                        <p class="text-gray-600 mb-4">Over 50,000 supporters gathered at Tundikhel as Rishi Dhamala outlined his vision for economic prosperity, youth employment, and corruption-free governance. The rally marked the largest political gathering of the season.</p>
                        <a href="#" class="text-blue-900 font-semibold hover:text-blue-700 flex items-center gap-2">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative h-56 overflow-hidden bg-gradient-to-br from-red-100 to-red-200">
                        <div class="absolute top-4 left-4 bg-blue-900 text-white px-4 py-1 rounded-full text-sm font-semibold"><i class="fas fa-file-alt"></i> Manifesto</div>
                    </div>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">December 8, 2024</div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Election Manifesto Released: 10-Point Plan for Nepal</h3>
                        <p class="text-gray-600 mb-4">Janadesh Party unveils ambitious manifesto promising 100,000 new jobs, free healthcare for all, quality education reform, infrastructure development, and zero-tolerance policy against corruption.</p>
                        <a href="#" class="text-blue-900 font-semibold hover:text-blue-700 flex items-center gap-2">View Manifesto <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                <article class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative h-56 overflow-hidden bg-gradient-to-br from-green-100 to-green-200">
                        <div class="absolute top-4 left-4 bg-green-600 text-white px-4 py-1 rounded-full text-sm font-semibold"><i class="fas fa-users"></i> Community</div>
                    </div>
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">December 7, 2024</div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Grassroots Campaign: Meeting Voters Across Districts</h3>
                        <p class="text-gray-600 mb-4">Rishi Dhamala continues door-to-door campaign across 75 districts, listening to farmers, students, entrepreneurs, and families. "Your problems are my priority," he tells voters in rural communities.</p>
                        <a href="#" class="text-blue-900 font-semibold hover:text-blue-700 flex items-center gap-2">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Media & Political Work -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-3">Media & Political Leadership</h2>
                <p class="text-gray-600">25+ years of journalism excellence and political service</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-lg p-8 border border-blue-100">
                    <div class="flex items-start gap-4">
                        <div class="w-20 h-20 bg-red-600 rounded-lg flex items-center justify-center text-white text-3xl flex-shrink-0">
                            <i class="fas fa-tv"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold mb-2 text-gray-900">Sidha Kura Janata Sanga</h3>
                            <p class="text-gray-600 mb-4">Popular political talk show discussing current affairs and national issues with prominent leaders and experts.</p>
                            <a href="/shows" class="inline-block bg-blue-900 text-white px-6 py-2 rounded-lg hover:bg-blue-800 transition">Watch Episodes</a>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-lg p-8 border border-blue-100">
                    <div class="flex items-start gap-4">
                        <div class="w-20 h-20 bg-blue-900 rounded-lg flex items-center justify-center text-white text-3xl flex-shrink-0">
                            <i class="fas fa-microphone"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold mb-2 text-gray-900">1000+ Interviews</h3>
                            <p class="text-gray-600 mb-4">Conducted exclusive interviews with political leaders, celebrities, and influential personalities across Nepal.</p>
                            <a href="/interviews" class="inline-block bg-blue-900 text-white px-6 py-2 rounded-lg hover:bg-blue-800 transition">View Interviews</a>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-lg p-8 border border-blue-100">
                    <div class="flex items-start gap-4">
                        <div class="w-20 h-20 bg-blue-900 rounded-lg flex items-center justify-center text-white text-3xl flex-shrink-0">
                            <i class="fas fa-award"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold mb-2 text-gray-900">Proven Track Record</h3>
                            <p class="text-gray-600 mb-4">25+ years of dedicated service in media and politics, fighting for people's rights and transparency in governance.</p>
                            <a href="/achievements" class="inline-block bg-blue-900 text-white px-6 py-2 rounded-lg hover:bg-blue-800 transition">View Achievements</a>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-lg p-8 border border-blue-100">
                    <div class="flex items-start gap-4">
                        <div class="w-20 h-20 bg-red-600 rounded-lg flex items-center justify-center text-white text-3xl flex-shrink-0">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold mb-2 text-gray-900">People First Approach</h3>
                            <p class="text-gray-600 mb-4">Direct connection with citizens, understanding grassroots issues, and implementing solutions that matter to you.</p>
                            <a href="/biography" class="inline-block bg-blue-900 text-white px-6 py-2 rounded-lg hover:bg-blue-800 transition">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Election Promises -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-3">Our Promises to You</h2>
                <p class="text-gray-600">Committed to building a better Nepal</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-lg p-8 border-l-4 border-blue-900 hover:shadow-xl transition">
                    <div class="text-5xl mb-4"><i class="fas fa-graduation-cap text-blue-900"></i></div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900">Quality Education for All</h3>
                    <p class="text-gray-600 leading-relaxed mb-3">Free quality education from primary to secondary level, modern digital classrooms, teacher training programs, and merit-based scholarships for 10,000 underprivileged students annually.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li><i class="fas fa-check-circle text-green-600"></i> Free textbooks & uniforms</li>
                        <li><i class="fas fa-check-circle text-green-600"></i> Digital learning infrastructure</li>
                        <li><i class="fas fa-check-circle text-green-600"></i> Vocational training centers</li>
                    </ul>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-lg p-8 border-l-4 border-blue-900 hover:shadow-xl transition">
                    <div class="text-5xl mb-4"><i class="fas fa-briefcase text-blue-900"></i></div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900">Employment & Economy</h3>
                    <p class="text-gray-600 leading-relaxed mb-3">Creating 100,000 new jobs through industrial parks, startup incubation centers, skill development programs, and attracting foreign investment to boost economic growth.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li><i class="fas fa-check-circle text-green-600"></i> Youth entrepreneurship fund</li>
                        <li><i class="fas fa-check-circle text-green-600"></i> Industrial development zones</li>
                        <li><i class="fas fa-check-circle text-green-600"></i> Skills training programs</li>
                    </ul>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-white rounded-xl shadow-lg p-8 border-l-4 border-blue-900 hover:shadow-xl transition">
                    <div class="text-5xl mb-4"><i class="fas fa-hospital text-blue-900"></i></div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-900">Universal Healthcare</h3>
                    <p class="text-gray-600 leading-relaxed mb-3">Free basic healthcare for all citizens, modern hospitals in every district, mobile health clinics for remote areas, and subsidized medicine through government pharmacies.</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li><i class="fas fa-check-circle text-green-600"></i> Free emergency services</li>
                        <li><i class="fas fa-check-circle text-green-600"></i> Senior citizen health cards</li>
                        <li><i class="fas fa-check-circle text-green-600"></i> Mental health support</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Photo Gallery Preview -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-3">Photo Gallery</h2>
                <p class="text-gray-600">Moments captured from various events and activities</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="relative overflow-hidden rounded-lg shadow-lg group h-64">
                    <img src="{{ asset('front/images/1.jpg') }}" alt="Gallery Image" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                        <p class="text-white font-semibold">Media Event</p>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg shadow-lg group h-64">
                    <img src="{{ asset('front/images/2.jpg') }}" alt="Gallery Image" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                        <p class="text-white font-semibold">TV Interview</p>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg shadow-lg group h-64">
                    <img src="{{ asset('front/images/3.jpg') }}" alt="Gallery Image" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                        <p class="text-white font-semibold">Press Conference</p>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg shadow-lg group h-64">
                    <img src="{{ asset('front/images/rishi-dhamala-film.jpg') }}" alt="Gallery Image" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                        <p class="text-white font-semibold">Film Appearance</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="/gallery" class="inline-block bg-blue-900 text-white px-8 py-3 rounded-lg hover:bg-blue-800 transition font-semibold">View Full Gallery</a>
            </div>
        </div>
    </section>

    <!-- Join Campaign CTA -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-2xl p-12 text-center text-white relative overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-0 left-0 w-64 h-64 bg-white rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 right-0 w-64 h-64 bg-yellow-400 rounded-full blur-3xl"></div>
                </div>
                <div class="relative z-10">
                    <div class="text-6xl mb-4"><i class="fas fa-hands-helping"></i></div>
                    <h2 class="text-4xl font-bold mb-4">Join the Movement for Change</h2>
                    <p class="text-xl mb-2 text-blue-100">Every voice matters. Every action counts.</p>
                    <p class="text-lg mb-8 text-blue-200">Be part of Nepal's transformation - volunteer, contribute, or simply spread the message of hope and progress.</p>
                    <div class="flex gap-4 justify-center flex-wrap">
                        <a href="/contact" class="bg-red-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-red-700 transition shadow-lg"><i class="fas fa-hand-holding-heart"></i> Become a Volunteer</a>
                        <a href="/contact" class="bg-white text-blue-900 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition shadow-lg"><i class="fas fa-envelope"></i> Contact Campaign Office</a>
                    </div>
                    <div class="mt-8 flex justify-center gap-8 text-sm">
                        <div><i class="fas fa-phone"></i> +977-1-XXXXXXX</div>
                        <div><i class="fas fa-envelope"></i> campaign@janadeshparty.np</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
