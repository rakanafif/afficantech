<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Affican Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&family=Poppins:wght@400;900&display=swap');
        body { font-family: 'Poppins', 'Cairo', sans-serif; background-color: #000; color: white; }
        .glow-gold { text-shadow: 0 0 15px rgba(255, 215, 0, 0.3); }
    </style>
</head>
<body class="min-h-screen bg-black">

    <div class="flex flex-col md:flex-row min-h-screen">
        <aside class="w-full md:w-64 bg-gray-900/50 border-{{ app()->getLocale() == 'ar' ? 'l' : 'r' }} border-gray-800 p-6">
            <h2 class="text-[#FFD700] text-2xl font-black mb-10 glow-gold italic">Affican</h2>
            <nav class="space-y-4">
                <a href="/" class="block text-gray-400 hover:text-[#0077FF] transition">🏠 {{ __('messages.home') }}</a>
                <a href="#" class="block text-[#0077FF] font-bold">📊 الإحصائيات</a>
                <a href="#" class="block text-gray-400 hover:text-white">📚 كتبك</a>
            </nav>
        </aside>

        <main class="flex-1 p-4 md:p-10">
            <header class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
                <h1 class="text-3xl font-black">{{ __('messages.be_vender') }}</h1>
                <div class="bg-gray-900 p-4 rounded-2xl border border-[#FFD700]/20 shadow-xl">
                    <p class="text-xs text-gray-500 uppercase tracking-widest mb-1">صافي أرباحك (80%)</p>
                    <span class="text-[#FFD700] text-3xl font-black glow-gold">$0.00</span>
                </div>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="bg-gray-900/30 p-6 rounded-2xl border border-gray-800">
                    <p class="text-gray-500 text-sm">إجمالي المبيعات</p>
                    <p class="text-2xl font-bold text-[#0077FF]">0</p>
                </div>
                <div class="bg-gray-900/30 p-6 rounded-2xl border border-gray-800">
                    <p class="text-gray-500 text-sm">الأعمال الرقمية</p>
                    <p class="text-2xl font-bold">0</p>
                </div>
            </div>

            <section class="bg-gray-900/20 border border-dashed border-gray-800 p-8 rounded-3xl text-center">
                <div class="w-16 h-16 bg-[#0077FF]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-[#0077FF] text-2xl font-black">+</span>
                </div>
                <h2 class="text-xl font-bold mb-2">ارفع عملك الإبداعي الآن</h2>
                <p class="text-gray-400 text-sm mb-6 max-w-md mx-auto">بوابتك لنشر المعرفة والتميز؛ ارفع عملك القادم وشاركه مع جمهورك العالمي</p>
                
                <button class="bg-[#FFD700] text-black font-black py-3 px-8 rounded-full hover:scale-105 transition shadow-lg">
                    رفع كتاب جديد
                </button>
            </section>
        </main>
    </div>

</body>
</html>
