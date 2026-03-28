<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affican Digital - Luxury Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&family=Poppins:wght@400;600&display=swap');
        body { font-family: 'Poppins', 'Cairo', sans-serif; background-color: #000000; color: white; scroll-behavior: smooth; }
        .text-golden-yellow { color: #FFD700; }
        .bg-golden-yellow { background-color: #FFD700; }
        .text-electric-blue { color: #0047FF; }
        .glow-blue { text-shadow: 0 0 15px rgba(0, 71, 255, 0.5); }
        .media-container { position: relative; width: 100%; height: 200px; overflow: hidden; border-radius: 1.5rem; margin-bottom: 1.5rem; }
        .media-container img, .media-container video { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
        .group:hover .media-container img, .group:hover .media-container video { transform: scale(1.1); }
    </style>
</head>
<body class="min-h-screen">

    <nav class="p-6 bg-black/90 border-b border-gray-900 sticky top-0 z-50 backdrop-blur-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="text-2xl font-black tracking-tighter">
                <span class="text-golden-yellow">Affican</span> <span class="text-electric-blue glow-blue">Digital</span>
            </div>
            
            <div class="hidden md:flex items-center space-x-8 rtl:space-x-reverse">
                <a href="#services" class="text-gray-400 hover:text-golden-yellow">خدماتي</a>
                <a href="#library" class="text-gray-400 hover:text-golden-yellow">المكتبة</a>
                <div class="flex items-center space-x-2 border-l border-gray-800 px-4">
                    <a href="/lang/ar" class="{{ app()->getLocale() == 'ar' ? 'text-golden-yellow' : 'text-gray-500' }}">AR</a>
                    <a href="/lang/fr" class="{{ app()->getLocale() == 'fr' ? 'text-golden-yellow' : 'text-gray-500' }}">FR</a>
                </div>
                <a href="/login" class="bg-golden-yellow text-black font-bold py-2 px-6 rounded-full text-sm">
                    {{ __('messages.login') }}
                </a>
            </div>
        </div>
    </nav>

    <header class="py-24 text-center px-4 relative">
        <div class="relative z-10">
            <h1 class="text-5xl md:text-7xl font-black mb-6 leading-tight">
                <span class="text-electric-blue glow-blue">{{ __('messages.welcome') }}</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto mb-10 font-light">
                {{ __('messages.discover') }}
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="#services" class="bg-golden-yellow text-black font-bold py-4 px-12 rounded-full text-lg shadow-lg hover:scale-105 transition">
                    استكشف خدماتي
                </a>
                <a href="/vendor/dashboard" class="border-2 border-electric-blue text-electric-blue font-bold py-4 px-12 rounded-full text-lg hover:bg-electric-blue hover:text-white transition">
                    {{ __('messages.be_vendor') }}
                </a>
            </div>
        </div>
    </header>

    <section id="services" class="py-20 bg-[#050505]">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16 text-white">حلول <span class="text-golden-yellow">Affican Digital</span></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                
                <div class="p-4 bg-gray-900/40 rounded-[2rem] border border-gray-800 hover:border-golden-yellow transition-all group">
                    <div class="media-container">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80" alt="Marketing">
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="text-2xl font-bold mb-3">التسويق الإلكتروني</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">إدارة شاملة للسوشيال ميديا وحملات إعلانية ذكية تضمن لك الانتشار والبيع.</p>
                    </div>
                </div>

                <div class="p-4 bg-gray-
