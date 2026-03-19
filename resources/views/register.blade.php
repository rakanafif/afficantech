<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Register') }} - Affican Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap');
        body { font-family: 'Cairo', sans-serif; background-color: #0a0a0a; color: white; }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <div class="bg-gray-900/50 p-10 rounded-3xl shadow-2xl w-full max-w-lg border border-gray-800 backdrop-blur-sm">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-[#FFD700]">{{ __('Create Account') }}</h2>
        </div>
        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="mb-4 text-left">
                <label class="block text-gray-300 mb-2">{{ __('Full Name') }}</label>
                <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl bg-black border border-gray-800 text-white focus:border-[#0047FF] focus:outline-none">
            </div>
            <div class="mb-4 text-left">
                <label class="block text-gray-300 mb-2">{{ __('Email') }}</label>
                <input type="email" name="email" required class="w-full px-4 py-3 rounded-xl bg-black border border-gray-800 text-white focus:border-[#0047FF] focus:outline-none">
            </div>
            <div class="mb-4 text-left">
                <label class="block text-gray-300 mb-2">{{ __('Password') }}</label>
                <input type="password" name="password" required class="w-full px-4 py-3 rounded-xl bg-black border border-gray-800 text-white focus:border-[#0047FF] focus:outline-none">
            </div>
            <button type="submit" class="w-full bg-[#FFD700] hover:bg-yellow-500 text-black font-bold py-3 rounded-xl transition mt-4">
                {{ __('Register Now') }}
            </button>
        </form>
    </div>
</body>
</html>
