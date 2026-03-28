<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affican Digital | Luxury Excellence</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;900&display=swap');
        body { font-family: 'Cairo', sans-serif; background-color: #000000; color: white; scroll-behavior: smooth; overflow-x: hidden; }
        .text-golden { color: #FFD700; }
        .bg-golden { background-color: #FFD700; }
        .glow-blue { color: #0047FF; text-shadow: 0 0 15px rgba(0, 71, 255, 0.4); }
        .card-glass { background: rgba(10, 10, 10, 0.8); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.05); transition: all 0.4s ease; }
        .card-glass:hover { border-color: #FFD700; transform: translateY(-8px); }
    </style>
</head>
<body>

    <nav class="p-5 sticky top-0 z-50 bg-black/90 border-b border-gray-900 backdrop-blur-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="text-2xl font-black italic"><span class="text-golden">Affican</span> <span class="glow-blue">Digital</span></div>
            
            <div class="flex items-center space-x-4 space-x-reverse">
                <div class="flex space-x-2 space-x-reverse border-x border-gray-800 px-4">
                    <a href="/lang/en" class="text-xs text-gray-500 hover:text-golden">EN</a>
                    <a href="/lang/ar" class="text-xs text-golden font-bold">AR</a>
                    <a href="/lang/fr" class="text-xs text-gray-500 hover:text-golden">FR</a>
                </div>
                <a href="/login" class="text-gray-400 text-xs hover:text-white">دخول</a>
                <a href="/register" class="bg-golden text-black px-5 py-2 rounded-full text-xs font-bold hover:scale-105 transition">انضم إلينا</a>
            </div>
        </div>
    </nav>

    <header class="py-24 text-center px-6 relative">
        <div class="relative z-10">
            <h1 class="text-5xl md:text-7xl font-black mb-6 leading-tight">
                أهلاً بك في <br>
                <span class="glow-blue uppercase tracking-tighter">Affican Digital</span>
            </h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg md:text-xl mb-12">
                نبتكر الحلول الرقمية المتطورة ونصيغ مستقبلك الإبداعي باحترافية عالمية.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-5">
                <a href="#portfolio" class="bg-golden text-black font-black py-4 px-12 rounded-full text-lg shadow-lg hover:bg-white transition">
                    استكشف خدماتي
                </a>
                <a href="/register" class="border-2 border-[#0047FF] text-[#0047FF] font-bold py-4 px-12 rounded-full text-lg hover:bg-[#0047FF] hover:text-white transition">
                    كن شريكاً إبداعياً
                </a>
            </div>
        </div>
    </header>
    <section id="portfolio" class="py-24 px-6 bg-[#030303]">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-black text-center mb-20 italic">إبداعات <span class="text-golden font-bold">Affican Digital</span></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <a href="/register" class="card-glass p-5 rounded-[2.5rem] group block text-right">
                    <div class="h-64 rounded-[2rem] overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <h3 class="text-2xl font-bold px-2 mb-3 text-white">التسويق الرقمي</h3>
                    <p class="text-gray-500 text-sm px-2 pb-4 leading-relaxed">إدارة حملات إعلانية ذكية واستراتيجيات انتشار عالمية لعلامتك التجارية.</p>
                    <div class="px-2 pb-2">
                        <span class="text-golden text-sm font-bold flex items-center gap-2 group-hover:gap-4 transition-all">اطلب الخدمة <span class="rtl:rotate-180">→</span></span>
                    </div>
                </a>

                <a href="/register" class="card-glass p-5 rounded-[2.5rem] group block text-center">
                    <div class="h-64 rounded-[2rem] bg-black flex items-center justify-center mb-6 border border-gray-800">
                        <span class="text-7xl group-hover:scale-110 transition duration-700">💻</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-white">برمجة الأنظمة</h3>
                    <p class="text-gray-500 text-sm px-2 pb-4 leading-relaxed">تطوير منصات ومواقع متطورة (مثل PropelAI) بأحدث التقنيات البرمجية.</p>
                    <div class="px-2 pb-2 flex justify-center">
                        <span class="text-[#0047FF] text-sm font-bold flex items-center gap-2 group-hover:gap-4 transition-all">تفاصيل أكثر <span class="rtl:rotate-180">→</span></span>
                    </div>
                </a>

                <a href="/register" class="card-glass p-5 rounded-[2.5rem] group block text-center">
                    <div class="h-64 rounded-[2rem] bg-black flex items-center justify-center mb-6 border border-gray-800">
                        <span class="text-7xl group-hover:scale-110 transition duration-700">🤖</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-white">الذكاء الاصطناعي</h3>
                    <p class="text-gray-400 text-sm px-2 pb-4 leading-relaxed">أتمتة ذكية وحلول AI مبتكرة لرفع كفاءة أعمالك وضمان مستقبلك الرقمي.</p>
                    <div class="px-2 pb-2 flex justify-center">
                        <span class="text-purple-500 text-sm font-bold flex items-center gap-2 group-hover:gap-4 transition-all">اكتشف الحلول <span class="rtl:rotate-180">→</span></span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    
