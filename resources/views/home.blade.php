<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    
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
        .card-glass { background: rgba(10, 10, 10, 0.8); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.05); transition: all 0.4s ease; cursor: pointer; }
        .card-glass:hover { border-color: #FFD700; transform: translateY(-8px); }
    </style>
</head>
<body>

    <nav class="p-5 sticky top-0 z-40 bg-black/90 border-b border-gray-900 backdrop-blur-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="text-2xl font-black italic"><span class="text-golden">Affican</span> <span class="glow-blue">Digital</span></div>
            <div class="flex items-center space-x-4 space-x-reverse">
                <div class="flex space-x-2 space-x-reverse border-x border-gray-800 px-4">
                    <a href="/lang/en" class="text-xs text-gray-500 hover:text-golden">EN</a>
                    <a href="/lang/ar" class="text-xs text-golden font-bold">AR</a>
                    <a href="/lang/fr" class="text-xs text-gray-500 hover:text-golden">FR</a>
                </div>
                <a href="/login" class="text-gray-400 text-xs hover:text-white">دخول</a>
                <a href="/register" class="bg-golden text-black px-5 py-2 rounded-full text-xs font-bold">انضم إلينا</a>
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
            <div class="flex justify-center gap-5">
                <a href="#portfolio" class="bg-golden text-black font-black py-4 px-12 rounded-full text-lg shadow-lg">استكشف خدماتي</a>
            </div>
        </div>
    </header>

    <section id="portfolio" class="py-24 px-6 bg-[#030303]">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-black text-center mb-20 italic">إبداعات <span class="text-golden font-bold">Affican Digital</span></h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div onclick="openModal('modal-1')" class="card-glass p-5 rounded-[2.5rem] group">
                    <div class="h-64 rounded-[2rem] overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <h3 class="text-2xl font-bold px-2 mb-3">التسويق الرقمي</h3>
                    <p class="text-gray-500 text-sm px-2 pb-2">اضغط هنا لمشاهدة التفاصيل والفيديو التوضيحي...</p>
                </div>

                <div onclick="openModal('modal-2')" class="card-glass p-5 rounded-[2.5rem] group text-center">
                    <div class="h-64 rounded-[2rem] bg-black flex items-center justify-center mb-6 border border-gray-800">
                        <span class="text-7xl group-hover:scale-110 transition duration-700">💻</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">برمجة الأنظمة</h3>
                    <p class="text-gray-500 text-sm px-2 pb-2">اضغط هنا لمشاهدة تفاصيل المنصات البرمجية...</p>
                </div>

                <div onclick="openModal('modal-3')" class="card-glass p-5 rounded-[2.5rem] group text-center">
                    <div class="h-64 rounded-[2rem] bg-black flex items-center justify-center mb-6 border border-gray-800">
                        <span class="text-7xl group-hover:scale-110 transition duration-700">🤖</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">الذكاء الاصطناعي</h3>
                    <p class="text-gray-400 text-sm px-2 pb-2">اضغط هنا لاستكشاف حلول الذكاء الاصطناعي...</p>
                </div>
            </div>
        </div>
    </section>

    <div id="modal-1" class="fixed inset-0 z-50 bg-black/95 hidden flex-col items-center justify-center p-4 transition-all opacity-0">
        <button onclick="closeModal('modal-1')" class="absolute top-6 right-6 text-white text-5xl hover:text-golden">&times;</button>
        <div class="w-full max-w-4xl bg-[#0a0a0a] border border-gray-800 rounded-[2rem] overflow-hidden shadow-[0_0_40px_rgba(0,0,0,0.8)]">
             <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200" class="w-full h-64 md:h-96 object-cover">
             <div class="p-8 text-center">
                 <h2 class="text-3xl font-black text-golden mb-4">التسويق الرقمي</h2>
                 <p class="text-gray-400 mb-8 leading-relaxed">نقدم لك خطة تسويق متكاملة تضمن وصول علامتك التجارية للجمهور المستهدف بدقة، باستخدام أحدث استراتيجيات السوشيال ميديا.</p>
                 <a href="https://wa.me/رقمك_هنا" target="_blank" class="inline-block bg-[#0047FF] text-white px-10 py-3 rounded-full font-bold hover:scale-105 transition">اطلب الخدمة عبر واتساب</a>
             </div>
        </div>
    </div>

    <div id="modal-2" class="fixed inset-0 z-50 bg-black/95 hidden flex-col items-center justify-center p-4 transition-all opacity-0">
        <button onclick="closeModal('modal-2')" class="absolute top-6 right-6 text-white text-5xl hover:text-golden">&times;</button>
        <div class="w-full max-w-4xl bg-[#0a0a0a] border border-gray-800 rounded-[2rem] overflow-hidden shadow-[0_0_40px_rgba(0,0,0,0.8)]">
             <div class="w-full h-64 md:h-96 bg-black flex items-center justify-center text-gray-600 border-b border-gray-800">
                 <span class="text-2xl">يمكنك وضع فيديو لتطبيق PropelAI هنا</span>
             </div>
             <div class="p-8 text-center">
                 <h2 class="text-3xl font-black text-golden mb-4">برمجة الأنظمة</h2>
                 <p class="text-gray-400 mb-8 leading-relaxed">بناء المواقع وتطبيقات الهاتف بأكواد نظيفة وأداء صاروخي لتلبية احتياجات أعمالك الرقمية.</p>
                 <a href="https://wa.me/رقمك_هنا" target="_blank" class="inline-block bg-[#0047FF] text-white px-10 py-3 rounded-full font-bold hover:scale-105 transition">اطلب الخدمة عبر واتساب</a>
             </div>
        </div>
    </div>

    <div id="modal-3" class="fixed inset-0 z-50 bg-black/95 hidden flex-col items-center justify-center p-4 transition-all opacity-0">
        <button onclick="closeModal('modal-3')" class="absolute top-6 right-6 text-white text-5xl hover:text-golden">&times;</button>
        <div class="w-full max-w-4xl bg-[#0a0a0a] border border-gray-800 rounded-[2rem] overflow-hidden shadow-[0_0_40px_rgba(0,0,0,0.8)]">
             <div class="w-full h-64 md:h-96 bg-black flex items-center justify-center text-gray-600 border-b border-gray-800">
                 <span class="text-2xl">مكان مخصص لعرض فيديو الذكاء الاصطناعي</span>
             </div>
             <div class="p-8 text-center">
                 <h2 class="text-3xl font-black text-golden mb-4">الذكاء الاصطناعي</h2>
                 <p class="text-gray-400 mb-8 leading-relaxed">دمج أدوات الـ AI في شركتك لتقليل التكاليف وأتمتة المهام اليومية بسرعة ودقة متناهية.</p>
                 <a href="https://wa.me/رقمك_هنا" target="_blank" class="inline-block bg-[#0047FF] text-white px-10 py-3 rounded-full font-bold hover:scale-105 transition">اطلب الخدمة عبر واتساب</a>
             </div>
        </div>
    </div>

    <script>
        function openModal(id) {
            let modal = document.getElementById(id);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            // تأخير بسيط لعمل حركة ظهور ناعمة
            setTimeout(() => { modal.classList.remove('opacity-0'); }, 10);
            document.body.style.overflow = 'hidden'; // إيقاف تحريك الصفحة بالخلفية
        }

        function closeModal(id) {
            let modal = document.getElementById(id);
            modal.classList.add('opacity-0');
            setTimeout(() => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto'; // إعادة تحريك الصفحة
            }, 300);
        }
    </script>

    <footer class="py-12 text-center text-gray-700 border-t border-gray-900 mt-20">
        <p>&copy; 2026 <span class="text-[#0047FF]">Affican Digital</span>. كل الحقوق محفوظة.</p>
    </footer>

</body>
</html>
