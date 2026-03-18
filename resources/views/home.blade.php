<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affican Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&family=Cairo:wght@400;700&display=swap');
        body { font-family: 'Poppins', 'Cairo', sans-serif; }
        h1, h2, .logo { font-family: 'Playfair Display', 'Cairo', serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    
    <nav class="bg-[#0033CC] text-white p-6 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-3xl font-bold logo tracking-wider">
                <span class="text-[#FFD700]">Affican</span> Digital
            </div>
            
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2 bg-blue-800 px-3 py-1 rounded-full text-xs">
                    <a href="/lang/fr" class="hover:text-[#FFD700] {{ app()->getLocale() == 'fr' ? 'text-[#FFD700]' : '' }}">FR</a>
                    <span class="text-blue-400">|</span>
                    <a href="/lang/ar" class="hover:text-[#FFD700] {{ app()->getLocale() == 'ar' ? 'text-[#FFD700]' : '' }}">AR</a>
                    <span class="text-blue-400">|</span>
                    <a href="/lang/en" class="hover:text-[#FFD700] {{ app()->getLocale() == 'en' ? 'text-[#FFD700]' : '' }}">EN</a>
                </div>

                <a href="/login" class="bg-[#FFD700] text-[#0033CC] font-bold py-2 px-5 rounded-full text-sm">Connexion</a>
            </div>
        </div>
    </nav>

    <header class="bg-[#0033CC] text-white py-20 text-center px-4">
        <h1 class="text-4xl md:text-6xl font-bold mb-6">
            {{ __('messages.welcome_title') }}
        </h1>
        <p class="text-lg text-blue-100 mb-10 max-w-2xl mx-auto">
            {{ __('messages.welcome_subtitle') }}
        </p>
        <div class="flex justify-center gap-4">
            <a href="#" class="bg-[#FFD700] text-[#0033CC] font-bold py-3 px-8 rounded-full shadow-lg">
                {{ __('messages.btn_explore') }}
            </a>
        </div>
    </header>

</body>
</html>

