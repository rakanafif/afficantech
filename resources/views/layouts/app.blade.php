<nav class="bg-black/90 border-b border-gray-800 p-4 sticky top-0 z-50 backdrop-blur-md">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <a href="/" class="text-2xl font-bold text-[#FFD700]">Affican <span class="text-[#0047FF]">Digital</span></a>
        
        <div class="hidden md:flex space-x-8 rtl:space-x-reverse">
            <a href="#services" class="text-gray-300 hover:text-[#FFD700]">خدماتي</a>
            <a href="#portfolio" class="text-gray-300 hover:text-[#FFD700]">أعمالي</a>
            <a href="#library" class="text-gray-300 hover:text-[#FFD700]">المكتبة</a>
            <a href="#community" class="text-gray-300 hover:text-[#FFD700]">المجتمع</a>
        </div>

        <div class="flex items-center space-x-4">
            @auth
                <a href="/vendor/dashboard" class="bg-[#0047FF] text-white px-5 py-2 rounded-full text-sm">لوحة التحكم</a>
            @else
                <a href="/login" class="text-gray-300 hover:text-white">دخول</a>
                <a href="/register" class="bg-[#FFD700] text-black px-5 py-2 rounded-full text-sm font-bold">انضم إلينا</a>
            @endauth
        </div>
    </div>
</nav>

