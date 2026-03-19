<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.add_new_book') }} - Affican Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&family=Poppins:wght@300;600&display=swap');
        body { font-family: 'Poppins', 'Cairo', sans-serif; background-color: #050505; color: white; }
    </style>
</head>
<body class="p-4 md:p-10">

    <div class="max-w-2xl mx-auto bg-gray-900/50 p-8 rounded-3xl border border-gray-800 backdrop-blur-xl">
        <h2 class="text-3xl font-black text-[#FFB700] mb-2">{{ __('messages.add_book_title') }}</h2>
        <p class="text-gray-400 mb-8">{{ __('messages.book_details_desc') }}</p>

        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-6">
                <label class="block text-[#9877FF] font-bold mb-2 uppercase text-xs tracking-widest">Titre du Livre</label>
                <input type="text" name="title" placeholder="Ex: " class="w-full bg-black border border-gray-800 p-4 rounded-xl focus:border-[#FFB700] outline-none transition" required>
            </div>

            <div class="mb-6">
                <label class="block text-[#9877FF] font-bold mb-2 uppercase text-xs tracking-widest">Description</label>
                <textarea name="description" rows="4" class="w-full bg-black border border-gray-800 p-4 rounded-xl focus:border-[#FFB700] outline-none transition" placeholder="Parlez-nous de votre œuvre..."></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div>
                    <label class="block text-[#9877FF] font-bold mb-2 uppercase text-xs tracking-widest">Prix ($)</label>
                    <input type="number" name="price" step="0.01" class="w-full bg-black border border-gray-800 p-4 rounded-xl focus:border-[#FFB700] outline-none" placeholder="0.00">
                </div>
                <div>
                    <label class="block text-[#9877FF] font-bold mb-2 uppercase text-xs tracking-widest">Couverture (Image)</label>
                    <input type="file" name="cover" class="w-full bg-gray-800 p-3 rounded-xl text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:bg-[#FFB700] file:text-black">
                </div>
            </div>

            <button type="submit" class="w-full bg-[#FFB700] hover:bg-yellow-500 text-black font-black py-4 rounded-2xl transition duration-300 transform hover:scale-[1.02] shadow-xl shadow-yellow-500/10">
                Publier le Livre
            </button>
        </form>
    </div>

</body>
</html>

