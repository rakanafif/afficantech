<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affican Digital | Luxury Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;900&display=swap');
        body { font-family: 'Cairo', sans-serif; background-color: #000000; color: white; scroll-behavior: smooth; }
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
            <div class="flex items-center space-x-6 space-x-reverse">
                <a href="#services" class="text-gray-400 hover:text-golden transition">خدماتي</a>
                <a href="/login" class="bg-golden text-black px-6 py-2 rounded-full font-bold text-sm">دخول</a>
            </div>
        </div>
    </nav>

    <header class="py-24 text-center px-4">
        <h1 class="text-5xl md:text-7xl font-black mb-6 leading-tight">
             أهلاً بك في <span class="glow-blue">Affican Digital</span>
        </h1>
        <p class="text-xl text-gray-400 max-w-2xl mx-auto mb-10">
            نحن نصنع المستقبل الرقمي عبر حلول برمجية ذكية واستراتيجيات تسويقية عالمية.
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="#services" class="bg-golden text-black font-black py-4 px-12 rounded-full text-lg shadow-xl hover:scale-105 transition">
                استكشف خدماتي
            </a>
            <a href="/register" class="border-2 border-[#0047FF] text-[#0047FF] font-bold py-4 px-12 rounded-full text-lg hover:bg-[#0047FF] hover:text-white transition">
                انضم كشريك إبداعي
            </a>
        </div>
    </header>

    <section id="services" class="py-20 bg-[#050505]">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-black mb-16 italic">حلول <span class="text-golden">Affican Digital</span></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-gray-900/40 p-4 rounded-[2.5rem] border border-gray-800 hover:border-golden transition-all group card-shadow">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=500&q=80" class="w-full h-56 object-cover rounded-[2rem] mb-6">
                    <h3 class="text-2xl font-bold mb-3 text-white">التسويق الإلكتروني</h3>
                    <p class="text-gray-400 text-sm px-4 pb-4">إدارة شاملة للسوشيال ميديا وحملات إعلانية ذكية تضمن لك الانتشار والبيع.</p>
                </div>

                <div class="bg-gray-900/40 p-4 rounded-[2.5rem] border border-gray-800 hover:border-[#0047FF] transition-all group card-shadow">
                    <div class="w-full h-56 bg-black rounded-[2rem] mb-6 flex items-center justify-center overflow-hidden">
                         <span class="text-6xl group-hover:scale-110 transition">💻</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-white">البرمجة والتطوير</h3>
                    <p class="text-gray-400 text-sm px-4 pb-4">بناء منصاتك الرقمية بأحدث الأكواد البرمجية لتكون الأسرع والأكثر أماناً.</p>
                </div>

                <div class="bg-gray-900/40 p-4 rounded-[2.5rem] border border-gray-800 hover:border-purple-500 transition-all group card-shadow">
                    <div class="w-full h-56 bg-black rounded-[2rem] mb-6 flex items-center justify-center overflow-hidden border border-purple-900/20">
                         <span class="text-6xl group-hover:scale-110 transition">🤖</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-white">الذكاء الاصطناعي</h3>
                    <p class="text-gray-400 text-sm px-4 pb-4">دمج حلول AI المتطورة في أعمالك لرفع الكفاءة وتوفير الوقت والمجهود.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-12 text-center text-gray-600 border-t border-gray-900 mt-20">
        <p>&copy; 2026 Affican Digital. Luxury Excellence.</p>
    </footer>

</body>
</html>
