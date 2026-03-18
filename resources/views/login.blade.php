<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Affican Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        body { font-family: 'Poppins', sans-serif; background-color: #0033CC; }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen px-4">
    <div class="bg-white p-10 rounded-3xl shadow-2xl w-full max-w-md">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-[#0033CC]">Affican <span class="text-[#FFD700]">Digital</span></h2>
            <p class="text-gray-500 mt-2">Bon retour ! Connectez-vous à votre compte.</p>
        </div>

        <form>
            <div class="mb-6">
                <label class="text-gray-700 font-semibold mb-2 block">Email</label>
                <input type="email" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#0033CC] focus:outline-none" placeholder="votre@email.com">
            </div>
            <div class="mb-8">
                <label class="text-gray-700 font-semibold mb-2 block">Mot de passe</label>
                <input type="password" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#0033CC] focus:outline-none" placeholder="••••••••">
            </div>

            <button type="submit" class="w-full bg-[#0033CC] hover:bg-blue-800 text-white font-bold py-3 rounded-xl transition shadow-lg">
                Se Connecter
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-8">
            Pas encore de compte ? 
            <a href="/register" class="text-[#0033CC] font-bold hover:underline">S'inscrire</a>
        </p>
        
        <div class="mt-6 text-center border-t pt-4">
            <a href="/" class="text-xs text-gray-400 hover:text-[#0033CC] transition">Retour à l'accueil</a>
        </div>
    </div>
</body>
</html>
