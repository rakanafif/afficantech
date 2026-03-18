
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Affican Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;900&display=swap');
        body { background-color: #000000; font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen px-4">
    <div class="bg-gray-900/50 p-10 rounded-3xl shadow-2xl w-full max-w-md border border-gray-800 backdrop-blur-sm">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-black text-[#FFD700]">Affican <span class="text-[#0077FF]">Digital</span></h2>
            <p class="text-gray-400 mt-2">Connectez-vous à l'excellence.</p>
        </div>

        <form>
            <div class="mb-6">
                <label class="text-[#0077FF] font-semibold mb-2 block text-sm uppercase tracking-widest">Email</label>
                <input type="email" class="w-full bg-black px-4 py-3 rounded-xl border border-gray-800 text-white focus:border-[#FFD700] focus:outline-none transition">
            </div>
            <div class="mb-8">
                <label class="text-[#0077FF] font-semibold mb-2 block text-sm uppercase tracking-widest">Mot de passe</label>
                <input type="password" class="w-full bg-black px-4 py-3 rounded-xl border border-gray-200 focus:border-[#FFD700] focus:outline-none text-white transition">
            </div>

            <button type="submit" class="w-full bg-[#FFD700] hover:bg-yellow-500 text-black font-black py-3 rounded-xl transition shadow-[0_0_20px_rgba(255,215,0,0.2)]">
                Se Connecter
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-8">
            Pas encore de compte ? <a href="/register" class="text-[#0077FF] font-bold hover:underline">S'inscrire</a>
        </p>
    </div>
</body>
</html>
