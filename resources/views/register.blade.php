<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Affican Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap');
        body { font-family: 'Poppins', 'Cairo', sans-serif; background-color: #0a0a0a; color: white; }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4">

    <div class="bg-gray-900/50 p-10 rounded-3xl shadow-2xl w-full max-w-lg border border-gray-800 backdrop-blur-sm">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-[#FFD700]">Créer un Compte</h2>
            <p class="text-gray-400 mt-2 text-sm">Rejoignez la communauté Affican Digital dès aujourd'hui.</p>
        </div>

        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-300 font-semibold mb-2 text-sm">Nom Complet</label>
                    <input type="text" name="name" class="w-full px-4 py-3 rounded-xl bg-black border border-gray-800 focus:border-[#0047FF] focus:outline-none text-white">
                </div>
                <div>
                    <label class="block text-gray-300 font-semibold mb-2 text-sm">Téléphone</label>
                    <input type="text" name="phone" class="w-full px-4 py-3 rounded-xl bg-black border border-gray-800 focus:border-[#0047FF] focus:outline-none text-white">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 font-semibold mb-2 text-sm">Email</label>
                <input type="email" name="email" class="w-full px-4 py-3 rounded-xl bg-black border border-gray-800 focus:border-[#0047FF] focus:outline-none text-white">
            </div>

            <div class="mb-4">
                <label class="block text-gray-300 font-semibold mb-2 text-sm">Mot de passe</label>
                <input type="password" name="password" class="w-full px-4 py-3 rounded-xl bg-black border border-gray-800 focus:border-[#0047FF] focus:outline-none text-white">
            </div>

            <div class="mb-6">
                <label class="block text-gray-300 font-semibold mb-2 text-sm">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" class="w-full px-4 py-3 rounded-xl bg-black border border-gray-800 focus:border-[#0047FF] focus:outline-none text-white">
            </div>

            <button type="submit" class="w-full bg-[#FFD700] hover:bg-yellow-500 text-black font-bold py-3 rounded-xl transition">
                S'inscrire Maintenant
            </button>

            <p class="text-center mt-6 text-sm text-gray-400">
                Vous avez déjà un compte ? <a href="/login" class="text-[#0047FF] font-bold hover:underline">Se connecter</a>
            </p>
        </form>
    </div>

</body>
</html>
