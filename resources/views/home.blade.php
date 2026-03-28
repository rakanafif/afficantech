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
                <div class="flex items-center space-x-2 border-l border-gray-800 pl-4 ml-4">
                    <a href="/lang/ar" class="{{ app()->getLocale() == 'ar' ? 'text-golden-yellow' : 'text-gray-500' }}">AR</a>
                    <a href="/lang/fr" class="{{ app()->getLocale() == 'fr' ? 'text-golden-yellow' : 'text-gray-500' }}">FR</a>
                </div>
                <a href="/login" class="bg-golden-yellow text-black font-bold py-2 px-6 rounded-full text-sm">
                    {{ __('messages.login') }}
                </a>
            </div>
        </div>
    </nav>

    <header class="py-24 text-center px-4 relative overflow-hidden">
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
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 bg-gray-900/50 rounded-3xl border border-gray-800 hover:border-golden-yellow transition group">
                    <div class="text-4xl mb-6 group-hover:scale-110 transition">🚀</div>
                    <h3 class="text-2xl font-bold mb-4">التسويق الإلكتروني</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">إدارة حملات السوشيال ميديا الإعلانية، بناء الهوية الرقمية، وتحليل البيانات لرفع المبيعات.</p>
                </div>
                <div class="p-8 bg-gray-900/50 rounded-3xl border border-gray-800 hover:border-electric-blue transition group">
                    <div class="text-4xl mb-6 group-hover:scale-110 transition">💻</div>
                    <h3 class="text-2xl font-bold mb-4">البرمجة والتطوير</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">بناء المواقع والمنصات المتطورة باستخدام أحدث التقنيات لضمان السرعة والأمان.</p>
                </div>
                <div class="p-8 bg-gray-900/50 rounded-3xl border border-gray-800 hover:border-purple-500 transition group">
                    <div class="text-4xl mb-6 group-hover:scale-110 transition">🤖</div>
                    <h3 class="text-2xl font-bold mb-4">الذكاء الاصطناعي</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">دمج حلول الذكاء الاصطناعي وأتمتة المهام لزيادة إنتاجية أعمالك وتطويرها.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-10 text-center border-t border-gray-900 mt-20 text-gray-500">
        <p>&copy; 2026 <span class="text-electric-blue">Affican Digital</span>. Luxury Excellence.</p>
    </footer>

</body>
</html>
