<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $service->title }} | Affican Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;900&display=swap');
        body { font-family: 'Cairo', sans-serif; background-color: #000000; color: white; }
        .text-golden { color: #FFD700; }
        .glow-blue { color: #0047FF; text-shadow: 0 0 15px rgba(0, 71, 255, 0.4); }
    </style>
</head>
<body>

    <nav class="p-5 border-b border-gray-900 bg-black/90 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-black italic"><span class="text-golden">Affican</span> <span class="glow-blue">Digital</span></a>
            <a href="/" class="text-gray-400 hover:text-white text-sm">العودة للرئيسية &larr;</a>
        </div>
    </nav>

    <section class="py-20 px-6">
        <div class="max-w-4xl mx-auto bg-[#050505] border border-gray-900 rounded-[3rem] overflow-hidden shadow-[0_0_40px_rgba(0,0,0,0.8)]">
            
            <div class="w-full h-[50vh] bg-black relative">
                @if($service->media_type == 'video')
                    <video src="{{ asset('storage/'.$service->media_path) }}" controls autoplay loop class="w-full h-full object-contain"></video>
                @elseif($service->media_type == 'image')
                    <img src="{{ asset('storage/'.$service->media_path) }}" class="w-full h-full object-cover">
                @else
                    <div class="w-full h-full flex items-center justify-center text-gray-700 text-2xl">لا توجد وسائط مرفوعة</div>
                @endif
            </div>

            <div class="p-10 text-center">
                <h1 class="text-4xl md:text-5xl font-black text-golden mb-6">{{ $service->title }}</h1>
                <p class="text-gray-400 text-lg leading-relaxed whitespace-pre-line">{{ $service->description }}</p>
                
                <div class="mt-12">
                    <a href="https://wa.me/رقم_هاتفك_هنا" target="_blank" class="bg-[#0047FF] text-white px-10 py-4 rounded-full font-bold hover:scale-105 transition shadow-[0_0_20px_rgba(0,71,255,0.4)]">
                        تواصل معي لطلب الخدمة
                    </a>
                </div>
            </div>
        </div>
    </section>

</body>
</html>

