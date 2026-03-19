<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.login') }} - Affican Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&family=Poppins:wght@400;900&display=swap');
        body { background-color: #000000; font-family: 'Poppins', 'Cairo', sans-serif; }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen px-4">
    <div class="bg-gray-900/50 p-10 rounded-3xl shadow-2xl w-full max-w-md border border-gray-800 backdrop-blur-sm">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-black text-[#FFD700]">Affican <span class="text-[#0077FF]">Digital</span></h2>
            <p class="text-gray-400 mt-2">{{ __('messages.discover') }}</p>
        </div>

        <form action="{{ route('login.post') }}" method="POST">
    @csrf
    <div class="mb-5 text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}">
        <label class="text-[#9877FF] font-semibold mb-2 block text-sm uppercase tracking-widest">{{ __('messages.email') }}</label>
        <input type="email" name="email" class="w-full bg-black px-4 py-3 rounded-xl border border-gray-800 text-white focus:border-[#9877FF] outline-none" required>
    </div>

    <div class="mb-5 text-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}">
        <label class="text-[#9877FF] font-semibold mb-2 block text-sm uppercase tracking-widest">{{ __('messages.password') }}</label>
        <input type="password" name="password" class="w-full bg-black px-4 py-3 rounded-xl border border-gray-800 text-white focus:border-[#9877FF] outline-none" required>
    </div>

    <button type="submit" class="w-full bg-[#FFB700] hover:bg-yellow-500 text-black font-black py-3 rounded-xl transition duration-300 shadow-lg">
        {{ __('messages.login_btn') }}
    </button>
</form>

        <p class="text-center text-sm text-gray-500 mt-8">
            {{ __('messages.no_account') }} <a href="/register" class="text-[#0077FF] font-bold hover:underline">{{ __('messages.register_now') }}</a>
        </p>
    </div>
</body>
</html>
