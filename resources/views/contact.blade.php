@extends('layout')

@section('title', 'Contact Us')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="text-6xl mb-6"><i class="fas fa-envelope-open-text"></i></div>
            <h1 class="text-5xl font-bold mb-4">Contact Campaign Office</h1>
            <p class="text-xl text-blue-100">Join us, volunteer, or share your ideas for a better Nepal</p>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">

            <div class="grid md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-900 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-envelope text-2xl text-white"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Email Us</h3>
                    <p class="text-gray-600 text-sm mb-2">campaign@janadeshparty.np</p>
                    <p class="text-gray-600 text-sm">contact@rishidhamala.com</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-900 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-phone text-2xl text-white"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Call Us</h3>
                    <p class="text-gray-600 text-sm mb-2">+977-1-XXXXXXX</p>
                    <p class="text-gray-600 text-sm">Mon-Fri: 9AM-6PM</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-900 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-map-marker-alt text-2xl text-white"></i>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Visit Us</h3>
                    <p class="text-gray-600 text-sm mb-2">Campaign Headquarters</p>
                    <p class="text-gray-600 text-sm">Kathmandu, Nepal</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">

                <div class="bg-white rounded-xl shadow-lg p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 bg-blue-900 rounded-lg flex items-center justify-center">
                            <i class="fas fa-paper-plane text-xl text-white"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900">Send a Message</h2>
                    </div>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2"><i class="fas fa-user"></i> Full Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent" placeholder="Enter your name">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2"><i class="fas fa-envelope"></i> Email Address</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent" placeholder="your@email.com">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2"><i class="fas fa-phone"></i> Phone Number</label>
                            <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent" placeholder="+977-XXX-XXXXXXX">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2"><i class="fas fa-comment"></i> Your Message</label>
                            <textarea rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-900 focus:border-transparent" placeholder="Share your thoughts, questions, or how you'd like to help..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-900 text-white py-3 rounded-lg font-semibold hover:bg-blue-800 transition flex items-center justify-center gap-2">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>

                <div>
                    <div class="bg-gradient-to-br from-blue-900 to-blue-700 rounded-xl shadow-lg p-8 text-white mb-6">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center">
                                <i class="fas fa-hands-helping text-xl text-blue-900"></i>
                            </div>
                            <h2 class="text-2xl font-bold">Join Our Campaign</h2>
                        </div>
                        <p class="mb-6 text-blue-100">Be part of the change. Your support matters!</p>
                        <div class="space-y-3">
                            <a href="#" class="block bg-white text-blue-900 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition text-center">
                                <i class="fas fa-hand-holding-heart"></i> Volunteer Now
                            </a>
                            <a href="#" class="block bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition text-center">
                                <i class="fas fa-donate"></i> Support Campaign
                            </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h3 class="font-bold text-gray-900 mb-6 text-xl flex items-center gap-2">
                            <i class="fas fa-share-alt text-blue-900"></i> Connect With Us
                        </h3>
                        <div class="space-y-3">
                            <a href="#" class="flex items-center gap-4 p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition group">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center text-white group-hover:scale-110 transition">
                                    <i class="fab fa-facebook-f text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">Facebook</div>
                                    <div class="text-sm text-gray-600">Follow our page</div>
                                </div>
                            </a>
                            <a href="#" class="flex items-center gap-4 p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition group">
                                <div class="w-12 h-12 bg-blue-400 rounded-lg flex items-center justify-center text-white group-hover:scale-110 transition">
                                    <i class="fab fa-twitter text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">Twitter</div>
                                    <div class="text-sm text-gray-600">Latest updates</div>
                                </div>
                            </a>
                            <a href="#" class="flex items-center gap-4 p-4 bg-red-50 rounded-lg hover:bg-red-100 transition group">
                                <div class="w-12 h-12 bg-red-600 rounded-lg flex items-center justify-center text-white group-hover:scale-110 transition">
                                    <i class="fab fa-youtube text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">YouTube</div>
                                    <div class="text-sm text-gray-600">Watch videos</div>
                                </div>
                            </a>
                            <a href="#" class="flex items-center gap-4 p-4 bg-pink-50 rounded-lg hover:bg-pink-100 transition group">
                                <div class="w-12 h-12 bg-pink-600 rounded-lg flex items-center justify-center text-white group-hover:scale-110 transition">
                                    <i class="fab fa-instagram text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">Instagram</div>
                                    <div class="text-sm text-gray-600">View photos</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
