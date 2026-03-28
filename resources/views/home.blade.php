<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affican Digital | Luxury Global Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;900&family=Poppins:wght@400;600;900&display=swap');
        body { font-family: 'Poppins', 'Cairo', sans-serif; background-color: #000000; color: white; scroll-behavior: smooth; }
        .text-golden { color: #FFD700; }
        .bg-golden { background-color: #FFD700; }
        .glow-blue { text-shadow: 0 0 20px rgba(0, 71, 255, 0.6); color: #0047FF; }
        .card-shadow { box-shadow: 0 10px 30px -10px rgba(0, 71, 255, 0.2); }
    </style>
</head>
<body class="min-h-screen">

    <nav class="p-6 bg-black/80 sticky top-0 z-50 backdrop-blur-lg border-b border-gray-900">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="text-2xl font-black">
                <span class="text-golden">Affican</span> <span class="glow-blue">Digital</span>
            </div>
            
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <div class="flex items-center space-x-3 rtl:space-x-reverse border-l border-r border-gray-800 px-6 mx-4">
                    <a href="/lang/en" class="{{ app()->getLocale() == 'en' ? 'text-golden font-bold' : 'text-gray-500' }} text-xs uppercase">EN</a>
                    <span class="text-gray-800">|</span>
                    <a href="/lang/ar" class="{{ app()->getLocale() == 'ar' ? 'text-golden font-bold' : 'text-gray-500' }} text-xs uppercase font-cairo">AR</a>
                    <span class="text-gray-800">|</span>
                    <a href="/lang/fr" class="{{ app()->getLocale() == 'fr' ? 'text-golden font-bold' : 'text-gray-500' }} text-xs uppercase">FR</a>
                </div>
                
                @auth
                    <a href="/vendor/dashboard" class="bg-[#0047FF] text-white px-6 py-2 rounded-full font-bold text-sm shadow-lg">Dashboard</a>
                @else
                    <a href="/login" class="text-gray-400 hover:text-white transition">Login</a>
                    <a href="/register" class="bg-golden text-black px-6 py-2 rounded-full font-bold text-sm hover:scale-105 transition">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <header class="py-28 text-center px-4">
        <h1 class="text-5xl md:text-8xl font-black mb-8 leading-tight tracking-tighter">
             {{ __('messages.welcome') }} <br> <span class="glow-blue">Affican Digital</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto mb-12 leading-relaxed px-6">
            {{ __('messages.discover') }}
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6 px-6">
            <a href="#services" class="bg-golden text-black font-black py-5 px-14 rounded-full text-lg shadow-2xl hover:scale-105 transition-all">
                {{ app()->getLocale() == 'ar' ? 'استكشف خدماتي' : (app()->getLocale() == 'fr' ? 'Explorer mes services' : 'Explore My Services') }}
            </a>
            <a href="/register" class="border-2 border-[#0047FF] text-[#0047FF] font-bold py-5 px-14 rounded-full text-lg hover:bg-[#0047FF] hover:text-white transition-all">
                {{ __('messages.be_vendor') }}
            </a>
        </div>
    </header>

    <section id="services" class="py-24 bg-[#030303] border-t border-gray-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-4">
                    {{ app()->getLocale() == 'ar' ? 'حلولنا العالمية' : (app()->getLocale() == 'fr' ? 'Solutions Globales' : 'Global Solutions') }}
                </h2>
                <div class="w-24 h-1 bg-golden mx-auto rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                
                <div class="bg-gray-900/30 p-5 rounded-[2.5rem] border border-gray-800 hover:border-golden transition-all group card-shadow overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80" class="w-full h-60 object-cover rounded-[2rem] mb-6 grayscale group-hover:grayscale-0 transition-all duration-500">
                    <div class="px-4 pb-6">
                        <h3 class="text-2xl font-bold mb-3 text-white">Digital Marketing</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Social media management and smart ad campaigns designed for maximum impact.</p>
                    </div>
                </div>

                <div class="bg-gray-900/30 p-5 rounded-[2.5rem] border border-gray-800 hover:border-[#0047FF] transition-all group card-shadow text-center flex flex-col items-center">
                    <div class="w-full h-60 bg-black rounded-[2rem] mb-6 flex items-center justify-center border border-gray-800">
                         <span class="text-7xl group-hover:scale-110 transition-transform duration-500">💻</span>
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="text-2xl font-bold mb-3 text-white">Web Development</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Building high-performance, secure platforms with the latest coding technologies.</p>
                    </div>
                </div>

                <div class="bg-gray-900/30 p-5 rounded-[2.5rem] border border-gray-800 hover:border-purple-500 transition-all group card-shadow text-center flex flex-col items-center">
                    <div class="w-full h-60 bg-black rounded-[2rem] mb-6 flex items-center justify-center border border-gray-800">
                         <span class="text-7xl group-hover:scale-110 transition-transform duration-500">🤖</span>
                    </div>
                    <div class="px-4 pb-6">
                        <h3 class="text-2xl font-bold mb-3 text-white">AI Solutions</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">Integrating cutting-edge AI tools to automate workflows and boost efficiency.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="py-16 text-center text-gray-500 bg-black border-t border-gray-900">
        <p class="text-sm tracking-widest uppercase">&copy; 2026 LUXURY SOLUTIONS. ALL RIGHTS RESERVED.</p>
    </footer>

</body>
</html>
