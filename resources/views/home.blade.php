<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affican Digital | Luxury Global Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;900&family=Poppins:wght@400;600;900&display=swap');
        body { font-family: 'Poppins', 'Cairo', sans-serif; background-color: #000000; color: white; scroll-behavior: smooth; overflow-x: hidden; }
        .text-golden { color: #FFD700; }
        .glow-blue { text-shadow: 0 0 20px rgba(0, 71, 255, 0.6); color: #0047FF; }
        .card-glass { background: rgba(10, 10, 10, 0.6); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.05); }
        .card-glass:hover { border-color: #FFD700; transform: translateY(-10px); transition: all 0.5s ease; }
    </style>
</head>
<body>

    <nav class="p-6 sticky top-0 z-50 card-glass border-b border-gray-900">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="text-2xl font-black italic"><span class="text-golden">Affican</span> <span class="glow-blue">Digital</span></div>
            <div class="flex items-center space-x-4 rtl:space-x-reverse">
                <div class="flex space-x-2 rtl:space-x-reverse border-x border-gray-800 px-4">
                    <a href="/lang/en" class="text-xs {{ app()->getLocale()=='en'?'text-golden':'text-gray-500' }}">EN</a>
                    <a href="/lang/ar" class="text-xs {{ app()->getLocale()=='ar'?'text-golden':'text-gray-500' }}">AR</a>
                    <a href="/lang/fr" class="text-xs {{ app()->getLocale()=='fr'?'text-golden':'text-gray-500' }}">FR</a>
                </div>
                @auth
                    <a href="/vendor/dashboard" class="bg-[#0047FF] px-5 py-2 rounded-full text-xs font-bold">Dashboard</a>
                @else
                    <a href="/login" class="text-gray-400 text-xs">Login</a>
                    <a href="/register" class="bg-golden text-black px-5 py-2 rounded-full text-xs font-bold">Join Us</a>
                @endauth
            </div>
        </div>
    </nav>

    <header class="py-28 text-center px-6">
        <h1 class="text-6xl md:text-8xl font-black mb-6">{{ __('messages.welcome') }} <br><span class="glow-blue">Affican Digital</span></h1>
        <p class="text-gray-400 max-w-2xl mx-auto text-xl mb-12">{{ __('messages.discover') }}</p>
        <div class="flex justify-center gap-6">
            <a href="#portfolio" class="bg-golden text-black font-black py-4 px-10 rounded-full hover:scale-105 transition">Explore My Work</a>
            <a href="/register" class="border border-[#0047FF] text-[#0047FF] py-4 px-10 rounded-full hover:bg-[#0047FF] hover:text-white transition">{{ __('messages.be_vendor') }}</a>
        </div>
    </header>

    <section id="portfolio" class="py-24 px-6 bg-[#030303]">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-black text-center mb-20 italic">إبداعات <span class="text-golden">Affican Digital</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="card-glass p-4 rounded-[3rem] group">
                    <div class="h-72 rounded-[2.5rem] overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <h3 class="text-2xl font-bold px-4 mb-2">Digital Marketing</h3>
                    <p class="text-gray-500 text-sm px-4 pb-6">استراتيجيات تسويقية وحملات إبداعية تضمن لك الصدارة والانتشار.</p>
                </div>
                <div class="card-glass p-4 rounded-[3rem] group">
                    <div class="h-72 rounded-[2.5rem] bg-black flex items-center justify-center mb-6">
                        <span class="text-8xl group-hover:scale-110 transition duration-700">💻</span>
                    </div>
                    <h3 class="text-2xl font-bold px-4 mb-2">Web Development</h3>
                    <p class="text-gray-500 text-sm px-4 pb-6">بناء منصاتك الرقمية (مثل PropelAI) بأحدث التقنيات وأعلى معايير الأمان.</p>
                </div>
                <div class="card-glass p-4 rounded-[3rem] group">
                    <div class="h-72 rounded-[2.5rem] bg-black flex items-center justify-center mb-6">
                        <span class="text-8xl group-hover:scale-110 transition duration-700">🤖</span>
                    </div>
                    <h3 class="text-2xl font-bold px-4 mb-2">AI Solutions</h3>
                    <p class="text-gray-400 text-sm px-4 pb-6">دمج الذكاء الاصطناعي في أعمالك لرفع الكفاءة وبناء مجتمعات ذكية متفاعلة.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-12 text-center text-gray-700 border-t border-gray-900">
        <p>&copy; 2026 Affican Digital. All rights reserved.</p>
    </footer>

</body>
</html>
