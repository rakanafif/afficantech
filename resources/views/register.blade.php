<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Affican Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        body { font-family: 'Poppins', sans-serif; background-color: #0033CC; }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen py-10 px-4">

    <div class="bg-white p-10 rounded-3xl shadow-2xl w-full max-w-lg">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-[#0033CC]">Créer un Compte</h2>
            <p class="text-gray-500 mt-2 text-sm">Rejoignez la communauté Affican Digital dès aujourd'hui.</p>
        </div>

        <form>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2 text-sm">Nom Complet</label>
                    <input type="text" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#0033CC] focus:outline-none transition" placeholder="Jean Dupont">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2 text-sm">Téléphone</label>
                    <input type="text" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#0033CC] focus:outline-none transition" placeholder="+213...">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2 text-sm">Email</label>
                <input type="email" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#0033CC] focus:outline-none transition" placeholder="votre@email.com">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2 text-sm">Mot de passe</label>
                <input type="password" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#0033CC] focus:outline-none transition" placeholder="••••••••">
            </div>

            <button type="submit" class="w-full bg-[#FFD700] hover:bg-yellow-500 text-[#0033CC] font-bold py-3 rounded-xl transition shadow-lg mb-4">
                S'inscrire Maintenant
            </button>
            
            <p class="text-center text-sm text-gray-600">
                Vous avez déjà un compte ? <a href="/login" class="text-[#0033CC] font-bold hover:underline">Se connecter</a>
            </p>
        </form>
    </div>

</body>
</html>

