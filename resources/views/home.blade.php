<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affican Digital - Luxury Edition</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&family=Poppins:wght@400;600&display=swap');
        body { 
            font-family: 'Poppins', 'Cairo', sans-serif; 
            background-color: #000000; /* خلفية سوداء */
        }
        .text-electric-blue { color: #0077FF; } /* أزرق كهربائي متوهج */
        .bg-electric-blue { background-color: #0077FF; }
        .text-golden-yellow { color: #FFD700; } /* أصفر ذهبي */
        .bg-golden-yellow { background-color: #FFD700; }
        .border-electric-blue { border-color: #0077FF; }
    </style>
</head>
<body class="text-white">

    <nav class="bg-black border-b border-gray-800 p-6 shadow-2xl">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-3xl font-bold logo tracking-tighter">
                <span class="text-golden-yellow">Affican</span> <span class="text-electric-blue">Digital</span>
            </div>
            
            <div class="flex items-center space-x-6">
                <div class="hidden md:flex space-x-6 px-4">
                    <a href="#" class="text-electric-blue hover:text-golden-yellow transition font-medium">{{ __('messages.library') }}</a>
                    <a href="#" class="text-electric-blue hover:text-golden-yellow transition font-medium">{{ __('messages.community') }}</a>
                </div>

                <div class="flex items-center space-x-2 bg-gray-900 border border-gray-700 px-3 py-1 rounded-full text-xs font-bold">
                    <a href="/lang/fr" class="{{ app()->getLocale() == 'fr' ? 'text-golden-yellow' : 'text-gray-400' }}">FR</a>
                    <span class="text-gray-700">|</span>
                    <a href="/lang/ar" class="{{ app()->getLocale() == 'ar' ? 'text-golden-yellow' : 'text-gray-400' }}">AR</a>
                </div>

                <a href="/login" class="bg-golden-yellow text-black font-black py-2 px-6 rounded-full text-sm hover:scale-105 transition transform">
                    {{ __('messages.login') }}
                </a>
            </div>
        </div>
    </nav>

    <header class="py-32 text-center px-4 relative overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-96 h-96 bg-blue-900/20 blur-[120px] rounded-full"></div>

        <div class="relative z-10">
            <h1 class="text-6xl md:text-8xl font-black mb-8 tracking-tight">
                <span class="text-electric-blue">{{ __('messages.welcome') }}</span>
            </h1>
            <p class="text-xl mb-12 text-gray-400 max-w-3xl mx-auto font-light leading-relaxed">
                {{ __('messages.discover') }}
            </p>
            
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="#" class="bg-golden-yellow text-black font-bold py-4 px-12 rounded-full text-xl shadow-[0_0_20px_rgba(255,215,0,0.3)] hover:shadow-golden-yellow/50 transition">
                    {{ __('messages.buy_now') }}
                </a>
                <a href="#" class="border-2 border-electric-blue text-electric-blue font-bold py-4 px-12 rounded-full text-xl hover:bg-electric-blue hover:text-white transition">
                    {{ __('messages.be_vender') }}
                </a>
            </div>
        </div>
    </header>

    <footer class="py-10 text-center border-t border-gray-900 mt-20 text-gray-600 text-sm">
        <p>&copy; 2026 <span class="text-electric-blue">Affican Digital</span>. Design Premium.</p>
    </footer>

</body>
</html>
