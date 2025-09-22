<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anne Couverture</title>
   
    <link rel="stylesheet" href="https://tailwindcss.com/plus-assets/build/assets/app-B1zPckLa.css"/>
    <link rel="stylesheet" href="/resources/css/app.css"/>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

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

@yield('content')

<footer class="bg-white dark:bg-gray-900 mt-5">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="#" class="hover:underline">Anne Couverture</a>. Tout droits reservés <!-- ? -->
    </span>
    <!-- A checker .... -->
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">A propos</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Mentions légales</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Plan du site</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
    </div>
</footer>

        
</body>
</html>
