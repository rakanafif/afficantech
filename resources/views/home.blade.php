<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affican Digital - Votre Bibliothèque Numérique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap');
        body { font-family: 'Poppins', sans-serif; }
        h1, h2, h3, .logo { font-family: 'Playfair Display', serif; }
        .bg-electric-blue { background-color: #0033CC; }
        .text-golden-yellow { color: #FFD700; }
        .bg-golden-yellow { background-color: #FFD700; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    
    <nav class="bg-electric-blue text-white p-6 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-3xl font-bold logo tracking-wider">
                <span class="text-golden-yellow">Affican</span> Digital
            </div>
            <div class="hidden md:flex space-x-8 text-lg">
                <a href="#" class="hover:text-golden-yellow transition">Accueil</a>
                <a href="#" class="hover:text-golden-yellow transition">Bibliothèque</a>
                <a href="#" class="hover:text-golden-yellow transition">Vendre un livre</a>
            </div>
            <div>
                <a href="#" class="bg-golden-yellow hover:bg-yellow-500 text-blue-900 font-bold py-2 px-6 rounded-full transition shadow-md">Connexion</a>
            </div>
        </div>
    </nav>

    <header class="bg-electric-blue text-white py-24 border-t border-blue-700">
        <div class="container mx-auto text-center px-4">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                La Sagesse de l'Esprit <br> <span class="text-golden-yellow">et la Passion du Cœur</span>
            </h1>
            <p class="text-lg md:text-xl mb-10 text-blue-100 max-w-2xl mx-auto">
                Bienvenue sur Affican Digital. La destination ultime pour découvrir, lire et publier des chefs-d'œuvre numériques.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="#" class="bg-golden-yellow hover:bg-yellow-500 text-blue-900 font-bold py-3 px-8 rounded-full text-lg transition shadow-lg">Explorer la Bibliothèque</a>
                <a href="#" class="bg-transparent border-2 border-golden-yellow text-golden-yellow hover:bg-golden-yellow hover:text-blue-900 font-bold py-3 px-8 rounded-full text-lg transition">Devenir Vendeur</a>
            </div>
        </div>
    </header>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-16 text-blue-900">Pourquoi Affican Digital ?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="p-8 bg-gray-50 rounded-xl shadow-sm border-t-4 border-golden-yellow hover:shadow-md transition">
                    <div class="text-5xl mb-4">📚</div>
                    <h3 class="text-2xl font-bold mb-4 text-blue-900">Qualité Premium</h3>
                    <p class="text-gray-600">Une sélection rigoureuse des meilleurs livres numériques pour nos lecteurs exigeants.</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-xl shadow-sm border-t-4 border-golden-yellow hover:shadow-md transition">
                    <div class="text-5xl mb-4">💰</div>
                    <h3 class="text-2xl font-bold mb-4 text-blue-900">Revenus Élevés</h3>
                    <p class="text-gray-600">Les auteurs reçoivent 80% des bénéfices. Nous valorisons votre talent créatif.</p>
                </div>
                <div class="p-8 bg-gray-50 rounded-xl shadow-sm border-t-4 border-golden-yellow hover:shadow-md transition">
                    <div class="text-5xl mb-4">🌍</div>
                    <h3 class="text-2xl font-bold mb-4 text-blue-900">Accès Mondial</h3>
                    <p class="text-gray-600">Lisez vos livres n'importe où, n'importe quand، sur tous vos appareils.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-electric-blue text-center py-8 text-blue-200 border-t border-blue-800">
        <p>&copy; 2026 Affican Digital. Tous droits réservés.</p>
    </footer>

</body>
</html>
