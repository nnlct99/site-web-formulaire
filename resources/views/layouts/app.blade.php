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

 <header class="bg-white text-black fixed w-full z-50 shadow "> <!--opacity-80-->
  <div class="relative container mx-auto flex items-center justify-between py-4 px-6">
    
    <!-- Logo -->
    <a href="/"><img src="{{ asset('images/logo-entreprise.jpg')}}" class="h-15" alt="Logo" /></a>

    <!-- Titre centré -->
    <a href="/" class="absolute left-1/2 transform -translate-x-1/2 text-2xl font-medium">
      Anne Couverture
    </a>

    <!-- Menu -->
    <nav class="space-x-6 hidden md:flex">
      <a href="#services" class="hover:text-blue-400 transition">Nos services</a>
      <a href="/realisations" class="hover:text-blue-400 transition">Réalisations</a>
      <a href="#contact" class="hover:text-blue-400 transition">Contact</a>
      <a href="/devis" class="hover:text-blue-400 transition">Devis</a>
    </nav>
    
    <!-- Burger mobile -->
    <div class="md:hidden">
      <button id="menuBtn" class="focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>
</header>


@yield('content')

<footer class="bg-white dark:bg-gray-800 mt-5">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-white sm:text-center dark:text-white">© 2025 <a href="#" class="hover:underline">Anne Couverture</a>. Tout droits reservés <!-- ? -->
    </span>
    <!-- A checker .... -->
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-white dark:text-white sm:mt-0">
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
