<form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    <div>
        <label class="block text-gray-400 mb-2">عنوان الخدمة</label>
        <input type="text" name="title" required class="w-full bg-black border border-gray-800 rounded-xl p-3 text-white">
    </div>

    <div>
        <label class="block text-gray-400 mb-2">وصف الخدمة</label>
        <textarea name="description" required class="w-full bg-black border border-gray-800 rounded-xl p-3 text-white h-32"></textarea>
    </div>

    <div>
        <label class="block text-[#FFD700] mb-2 font-bold">رفع وسائط (فيديو أو صورة)</label>
        <div class="relative border-2 border-dashed border-gray-800 rounded-2xl p-6 text-center hover:border-[#0047FF] transition">
            <input type="file" name="media" accept="image/*,video/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
            <div class="text-gray-500">
                <span class="text-3xl block mb-2">📁</span>
                <span>اضغط هنا لرفع فيديو أو صورة للخدمة</span>
                <p class="text-xs mt-2">MP4, JPG, PNG (أقصى حجم 20MB)</p>
            </div>
        </div>
    </div>

    <button type="submit" class="w-full bg-[#0047FF] text-white font-bold py-4 rounded-2xl shadow-lg hover:scale-[1.02] transition">
        نشر الخدمة فوراً
    </button>
</form>

