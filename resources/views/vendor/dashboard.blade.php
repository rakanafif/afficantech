<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة القيادة | Affican Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;900&display=swap');
        body { font-family: 'Cairo', sans-serif; background-color: #000000; color: white; }
        .text-golden { color: #FFD700; }
        .bg-golden { background-color: #FFD700; }
        .glow-blue { color: #0047FF; text-shadow: 0 0 15px rgba(0, 71, 255, 0.4); }
    </style>
</head>
<body class="bg-[#050505] min-h-screen flex flex-col">

    <nav class="p-5 border-b border-gray-900 bg-black/90 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-black italic"><span class="text-golden">Affican</span> <span class="glow-blue">Digital</span></a>
            <div class="flex items-center gap-4">
                <span class="text-gray-400 text-sm hidden md:block">أهلاً بك في لوحة الإدارة</span>
                <a href="/" class="text-gray-500 hover:text-white text-sm transition">العودة للموقع &larr;</a>
            </div>
        </div>
    </nav>

    <div class="flex-grow max-w-4xl mx-auto w-full p-6 py-12">
        
        <div class="text-center mb-10">
            <h1 class="text-4xl font-black mb-2">إضافة <span class="text-golden">عمل أو خدمة</span></h1>
            <p class="text-gray-500">ارفع أعمالك، فيديوهاتك، وتفاصيل خدماتك لتظهر في صفحتك المخصصة</p>
        </div>

        @if(session('success'))
            <div class="bg-green-900/40 border border-green-500 text-green-400 p-4 rounded-xl mb-8 text-center font-bold">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data" class="bg-[#0a0a0a] border border-gray-800 p-6 md:p-10 rounded-[2rem] shadow-[0_0_40px_rgba(0,71,255,0.05)] relative overflow-hidden">
            @csrf
            
            <div class="absolute -top-20 -left-20 w-40 h-40 bg-golden rounded-full blur-[100px] opacity-10 pointer-events-none"></div>

            <div class="mb-6 relative z-10">
                <label class="block text-gray-400 mb-2 text-sm">عنوان الخدمة أو المشروع</label>
                <input type="text" name="title" required placeholder="مثال: إطلاق حملة تسويق إلكتروني..." class="w-full px-4 py-3 bg-black border border-gray-800 rounded-xl text-white focus:outline-none focus:border-[#0047FF] transition">
            </div>

            <div class="mb-6 relative z-10">
                <label class="block text-gray-400 mb-2 text-sm">وصف تفصيلي</label>
                <textarea name="description" rows="4" required placeholder="اكتب تفاصيل الخدمة أو المشروع هنا..." class="w-full px-4 py-3 bg-black border border-gray-800 rounded-xl text-white focus:outline-none focus:border-[#0047FF] transition resize-none"></textarea>
            </div>

            <div class="mb-10 relative z-10">
                <label class="block text-gray-400 mb-2 text-sm">رفع وسائط (فيديو أو صورة)</label>
                <div class="relative border-2 border-dashed border-gray-700 hover:border-[#0047FF] transition rounded-xl p-10 text-center bg-black cursor-pointer group">
                    <input type="file" name="media" required accept="video/mp4,video/mov,image/jpeg,image/png,image/webp" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20">
                    
                    <div class="text-6xl mb-4 group-hover:scale-110 transition duration-300">📁</div>
                    <p class="text-white font-bold mb-1 text-lg">اضغط هنا أو اسحب الملف</p>
                    <p class="text-gray-500 text-xs">الصيغ المدعومة: MP4, JPG, PNG (الحد الأقصى 20MB)</p>
                </div>
            </div>

            <button type="submit" class="w-full relative z-10 bg-[#0047FF] text-white font-black py-4 rounded-xl hover:scale-105 transition shadow-[0_0_20px_rgba(0,71,255,0.4)] text-lg tracking-wide">
                نشر الخدمة فوراً
            </button>
        </form>
        
    </div>

</body>
</html>
