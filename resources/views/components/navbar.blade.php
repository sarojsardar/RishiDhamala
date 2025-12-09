<div class="bg-blue-900 text-white py-2">
    <div class="container mx-auto px-4 flex justify-between items-center text-sm">
        <div class="flex gap-4">
            <span><i class="fas fa-envelope"></i> contact@rishidhamala.com</span>
            <span><i class="fas fa-phone"></i> +977-1-XXXXXXX</span>
        </div>
        <div class="flex gap-3">
            <a href="/lang/np" class="hover:text-blue-300"><i class="fas fa-language"></i> नेपाली</a>
            <span>|</span>
            <a href="/lang/en" class="hover:text-blue-300"><i class="fas fa-language"></i> English</a>
        </div>
    </div>
</div>

<header class="bg-white shadow-lg sticky top-0 z-50 border-b-2 border-blue-100">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4">
            <div class="flex items-center gap-4">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-900 to-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold shadow-lg">RD</div>
                <div>
                    <h1 class="text-3xl font-bold text-blue-900"><a href="/">Rishi Dhamala</a></h1>
                    <p class="text-sm text-gray-600">Janadesh Party Nepal</p>
                </div>
            </div>
            <button class="lg:hidden text-2xl text-blue-900" onclick="toggleMenu()"><i class="fas fa-bars"></i></button>
            <nav class="hidden lg:flex gap-2">
                <a href="/" class="px-4 py-2 rounded-lg font-medium transition-all {{ request()->is('/') ? 'bg-blue-900 text-white' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-900' }}"><i class="fas fa-home"></i> Home</a>
                <a href="/biography" class="px-4 py-2 rounded-lg font-medium transition-all {{ request()->is('biography') ? 'bg-blue-900 text-white' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-900' }}"><i class="fas fa-user"></i> Biography</a>
                <a href="/shows" class="px-4 py-2 rounded-lg font-medium transition-all {{ request()->is('shows') ? 'bg-blue-900 text-white' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-900' }}"><i class="fas fa-tv"></i> TV Shows</a>
                <a href="/interviews" class="px-4 py-2 rounded-lg font-medium transition-all {{ request()->is('interviews') ? 'bg-blue-900 text-white' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-900' }}"><i class="fas fa-microphone"></i> Interviews</a>
                <a href="/gallery" class="px-4 py-2 rounded-lg font-medium transition-all {{ request()->is('gallery') ? 'bg-blue-900 text-white' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-900' }}"><i class="fas fa-images"></i> Gallery</a>
                <a href="/contact" class="px-4 py-2 rounded-lg font-medium transition-all {{ request()->is('contact') ? 'bg-blue-900 text-white' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-900' }}"><i class="fas fa-envelope"></i> Contact</a>
            </nav>
        </div>
    </div>
</header>

<div id="mobileMenu" class="hidden fixed inset-0 bg-black bg-opacity-50 z-40" onclick="toggleMenu()">
    <div class="bg-white w-80 h-full overflow-y-auto" onclick="event.stopPropagation()">
        <div class="p-6">
            <button onclick="toggleMenu()" class="text-2xl mb-6 text-gray-700"><i class="fas fa-times"></i></button>
            <nav class="space-y-4">
                <a href="/" class="block text-lg font-semibold text-gray-800 hover:text-blue-900"><i class="fas fa-home"></i> Home</a>
                <a href="/biography" class="block text-lg font-semibold text-gray-800 hover:text-blue-900"><i class="fas fa-user"></i> Biography</a>
                <a href="/shows" class="block text-lg font-semibold text-gray-800 hover:text-blue-900"><i class="fas fa-tv"></i> TV Shows</a>
                <a href="/interviews" class="block text-lg font-semibold text-gray-800 hover:text-blue-900"><i class="fas fa-microphone"></i> Interviews</a>
                <a href="/gallery" class="block text-lg font-semibold text-gray-800 hover:text-blue-900"><i class="fas fa-images"></i> Gallery</a>
                <a href="/contact" class="block text-lg font-semibold text-gray-800 hover:text-blue-900"><i class="fas fa-envelope"></i> Contact</a>
            </nav>
        </div>
    </div>
</div>
