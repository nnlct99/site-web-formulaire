<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anne Couverture</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-800">

<!-- Navbar -->
<header class="bg-gray-900 text-white fixed w-full z-50 shadow">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <a href="#" class="text-2xl font-bold">Anne Couverture</a>
        <nav class="space-x-6 hidden md:flex">
            <a href="#about" class="hover:text-yellow-400 transition">À propos</a>
            <a href="#creations" class="hover:text-yellow-400 transition">Créations</a>
            <a href="#contact" class="hover:text-yellow-400 transition">Contact</a>
            <a href="#devis" class="hover:text-yellow-400 transition">Devis</a>
        </nav>
        <!-- Mobile burger -->
        <div class="md:hidden">
            <button id="menuBtn" class="focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
    <!-- Mobile menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-gray-800">
        <a href="#about" class="block py-2 px-6 hover:bg-gray-700">À propos</a>
        <a href="#creations" class="block py-2 px-6 hover:bg-gray-700">Créations</a>
        <a href="#contact" class="block py-2 px-6 hover:bg-gray-700">Contact</a>
        <a href="#devis" class="block py-2 px-6 hover:bg-gray-700">Devis</a>
    </div>
</header>

<!-- Hero Section -->
<section class="h-screen bg-cover bg-center" style=" background-image: url(/images/couvreurs1.jpg);background-repeat:no-repeat; background-position:center center; background-attachment : fixed ">
    
    <div class=" h-full flex flex-col justify-center items-center text-center px-4">
       
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Couvreurs Pro</h1>
        <p class="text-white text-lg md:text-2xl mb-6">Votre toiture, notre expertise</p>
        <a href="#devis" class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-3 px-6 rounded shadow">Demander un devis</a>
    </div>
</section>

<!-- À propos -->
<section id="about" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 md:px-0">
        <h2 class="text-3xl font-bold text-center mb-8">À propos</h2>
        <p class="max-w-3xl mx-auto text-center text-gray-700 leading-relaxed">
            Forts de 20 ans d'expérience, nous sommes spécialisés dans tous types de travaux de couverture.
            Toitures, ardoises, tuiles ou zinc : nous garantissons un travail soigné et durable.
        </p>
    </div>
</section>

<!-- Créations -->
<section id="creations" class="py-20">
    <div class="container mx-auto px-6 md:px-0">
        <h2 class="text-3xl font-bold text-center mb-12">Nos réalisations</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="overflow-hidden rounded shadow-lg hover:scale-105 transition">
                <img src="{{URL::asset('/images/couvreurs1.jpg')}}" alt="Toiture 1" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Toiture traditionnelle</h3>
                    <p class="text-gray-700 text-sm">Rénovation d’une toiture en tuiles avec isolation complète.</p>
                </div>
            </div>
            <div class="overflow-hidden rounded shadow-lg hover:scale-105 transition">
                <img src="{{URL::asset('/images/couvreurs1.jpg')}}" alt="Toiture 2" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Toiture moderne</h3>
                    <p class="text-gray-700 text-sm">Installation de toiture en zinc sur maison contemporaine.</p>
                </div>
            </div>
            <div class="overflow-hidden rounded shadow-lg hover:scale-105 transition">
                <img src="{{URL::asset('/images/couvreurs1.jpg')}}" alt="Toiture 3" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Réparation d’urgence</h3>
                    <p class="text-gray-700 text-sm">Intervention rapide pour fuite et réparation de charpente.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 md:px-0 max-w-3xl">
        <h2 class="text-3xl font-bold text-center mb-8">Contactez-nous</h2>
        <form class="bg-white shadow-md rounded px-8 py-10 space-y-6">
            <div>
                <label class="block text-gray-700 font-bold mb-2">Nom</label>
                <input type="text" placeholder="Votre nom" class="w-full border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" placeholder="Votre email" class="w-full border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2">Message</label>
                <textarea placeholder="Votre message" class="w-full border rounded px-3 py-2 h-32"></textarea>
            </div>
            <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-3 px-6 rounded shadow">Envoyer</button>
        </form>
    <a href="/devis">Un devis ?</a>

    </div>

</section>

<!-- Devis -->
<!-- <section id="devis" class="py-20">
    <div class="container mx-auto px-6 md:px-0 max-w-3xl">
        <h2 class="text-3xl font-bold text-center mb-8">Demandez un devis</h2>
        <form class="bg-white shadow-md rounded px-8 py-10 space-y-6">
            <div>
                <label class="block text-gray-700 font-bold mb-2">Nom</label>
                <input type="text" placeholder="Votre nom" class="w-full border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" placeholder="Votre email" class="w-full border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2">Téléphone</label>
                <input type="tel" placeholder="Votre téléphone" class="w-full border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2">Message / détails du projet</label>
                <textarea placeholder="Votre projet" class="w-full border rounded px-3 py-2 h-32"></textarea>
            </div>
            <button class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-3 px-6 rounded shadow">Envoyer le devis</button>
        </form>
    </div>
</section> -->

<!-- Footer -->
<footer class="bg-gray-900 text-white py-6 mt-12">
    <div class="container mx-auto px-6 text-center">
        © 2025 Couvreurs Pro - Tous droits réservés
    </div>
</footer>

<script>
    // Mobile menu toggle
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

</body>
</html>
