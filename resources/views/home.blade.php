<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affican Digital - Luxury Edition</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&family=Poppins:wght@400;900&display=swap');
        body { font-family: 'Poppins', 'Cairo', sans-serif; background-color: #000000; color: white; }
        .text-electric-blue { color: #0077FF; }
        .text-golden-yellow { color: #FFD700; }
        .bg-golden-yellow { background-color: #FFD700; }
        .glow-blue { text-shadow: 0 0 10px rgba(0, 119, 255, 0.5); }
    </style>
</head>
<body class="min-h-screen">

    <nav class="bg-black border-b border-gray-900 p-6 shadow-2xl">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-3xl font-black tracking-tighter">
                <span class="text-golden-yellow">Affican</span> <span class="text-electric-blue glow-blue">Digital</span>
            </div>
            
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2 bg-gray-900 px-3 py-1 rounded-full text-xs font-bold border border-gray-800">
                    <a href="/lang/fr" class="{{ app()->getLocale() == 'fr' ? 'text-golden-yellow' : 'text-gray-500' }}">FR</a>
                    <span class="text-gray-700">|</span>
                    <a href="/lang/ar" class="{{ app()->getLocale() == 'ar' ? 'text-golden-yellow' : 'text-gray-500' }}">AR</a>
                </div>
                <a href="/login" class="bg-golden-yellow text-black font-black py-2 px-6 rounded-full text-sm">
                    {{ __('messages.login') }}
                </a>
            </div>
        </div>
    </nav>

    <header class="py-32 text-center px-4 relative overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-96 h-96 bg-blue-900/10 blur-[120px] rounded-full"></div>

        <div class="relative z-10">
            <h1 class="text-5xl md:text-7xl font-black mb-8 leading-tight">
                <span class="text-electric-blue glow-blue">{{ __('messages.welcome') }}</span>
            </h1>
            <p class="text-xl mb-12 text-gray-400 max-w-2xl mx-auto font-light leading-relaxed">
                {{ __('messages.discover') }}
            </p>
            
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="#" class="bg-golden-yellow text-black font-black py-4 px-12 rounded-full text-xl shadow-lg">
                    {{ __('messages.buy_now') }}
                </a>
                
                <a href="/vendor/dashboard" class="border-2 border-electric-blue text-electric-blue font-bold py-4 px-12 rounded-full text-xl hover:bg-electric-blue hover:text-white transition-all">
                    {{ __('messages.be_vender') }}
                </a>
            </div>
        </div>
    </header>

    <footer class="py-10 text-center border-t border-gray-900 mt-20 text-gray-600 text-sm">
        <p>&copy; 2026 <span class="text-electric-blue">Affican Digital</span>. Luxury Excellence.</p>
    </footer>

</body>
</html>
