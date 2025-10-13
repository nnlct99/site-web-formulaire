@extends('layouts.app')

<script type="text/javascript">
function visible() {
    document.getElementById("d").style.display = "block";
    // Mettre à jour la valeur min à chaque fois qu'on affiche le champ
    updateMinDateTime();
}

function invisible() {
    document.getElementById("d").style.display = "none";
    document.querySelector('input[name="appointment"]').value = "";
}

function updateMinDateTime() {
    const now = new Date();
    // Ajouter 1 heure pour laisser un délai minimum
    now.setHours(now.getHours() + 1);
    
    // Format YYYY-MM-DDTHH:MM
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0');
    const day = String(now.getDate()).padStart(2, '0');
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    
    const minDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;
    
    const appointmentInput = document.querySelector('input[name="appointment"]');
    if (appointmentInput) {
        appointmentInput.min = minDateTime;
    }
}

// Mettre à jour le min au chargement de la pagex
document.addEventListener('DOMContentLoaded', function() {
    updateMinDateTime();
});

    // Mobile menu toggle
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

<!--swiper js
maconery-->

<script>
let currentSlide = 0;
const totalSlides = 3;
let autoSlideInterval;

function updateCarousel() {
    const track = document.getElementById('carouselTrack');
    const indicators = document.querySelectorAll('.indicator');
    
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
    
    indicators.forEach((indicator, index) => {
        if (index === currentSlide) {
            indicator.classList.remove('bg-gray-300');
            indicator.classList.add('bg-blue-400');
        } else {
            indicator.classList.remove('bg-blue-400');
            indicator.classList.add('bg-gray-300');
        }
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateCarousel();
    resetAutoSlide();
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateCarousel();
    resetAutoSlide();
}

function goToSlide(index) {
    currentSlide = index;
    updateCarousel();
    resetAutoSlide();
}

function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
        nextSlide();
    }, 5000);
}

function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    startAutoSlide();
}

// Démarrer le carrousel automatique au chargement
document.addEventListener('DOMContentLoaded', () => {
    startAutoSlide();
});
</script>

@section('content')

<!-- Hero Section -->
<section class="h-screen bg-cover bg-center" style=" background-image: url(/images/couvreurs2.jpg);background-repeat:no-repeat; background-position:center center; background-attachment : fixed ">
    
    <div class=" h-full flex flex-col justify-center items-center text-center px-4">
       
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Anne Couverture</h1>
        <p class="text-white text-lg md:text-2xl mb-6">Votre toiture, notre expertise</p>
        <a href="/devis" class="bg-blue-400 hover:bg-blue-500 text-gray-900 transition-colors duration-200 font-medium py-2 px-4 rounded shadow">Demander un devis</a>
    </div>
</section>

<!-- À propos -->
<section id="about" class="py-20 bg-gray-300">
    <div class="container mx-auto px-6 md:px-0">
        <h2 class="text-3xl font-bold text-center text-black mb-8">À propos</h2>
        <p class="max-w-3xl mx-auto text-center text-black leading-relaxed">
            Forts de 17 ans d'expérience, nous sommes spécialisés dans tous types de travaux de couverture.<br>
            Toitures, charpentes, zinguerie, démoussage et pose de velux etc ... <br>
            Nous garantissons un travail soigné et durable.
        </p>
    </div>
</section>

<!-- Services -->

<!--Neuf
- Réparation
- Rénovation
- Charpente
- Couverture
- Pose de Velux
- Zinguerie
- Démoussage

-->

<!-- Section Carrousel des Services -->
<section id="services" class="py-20">
    <div class="container mx-auto px-6 md:px-0">
        <h2 class="text-3xl font-bold text-center mb-12">Nos services</h2>
        
        <!-- Carrousel Container -->
        <div class="relative">
            <!-- Carrousel Track -->
            <div class="overflow-hidden">
                <div id="carouselTrack" class="flex transition-transform duration-500 ease-in-out">
                    
                    <!-- Slide 1 : Neuf, Réparation, Rénovation -->
                    <div class="w-full flex-shrink-0">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="overflow-hidden rounded shadow-lg hover:scale-105 transition">
                                <img src="{{URL::asset('/images/couvreurs1.jpg')}}" alt="Toiture 1" class="w-full h-64 object-cover">
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-2">Neuf</h3>
                                    <p class="text-gray-700 text-sm">Construction de toitures neuves avec matériaux de qualité.</p>
                                    <a class="bg-blue-400 hover:bg-blue-500 transition-colors duration-200 text-gray-900 font-medium py-3 px-6 rounded shadow flex justify-center mt-5 cursor-pointer" href="/devis">Demander un devis</a>
                                </div>
                            </div>
                            <div class="overflow-hidden rounded shadow-lg hover:scale-105 transition">
                                <img src="{{URL::asset('/images/couvreurs1.jpg')}}" alt="Toiture 2" class="w-full h-64 object-cover">
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-2">Réparation</h3>
                                    <p class="text-gray-700 text-sm">Intervention rapide pour tous types de réparations.</p>
                                    <a class="bg-blue-400 hover:bg-blue-500 transition-colors duration-200 text-gray-900 font-medium py-3 px-6 rounded shadow flex justify-center mt-5 cursor-pointer" href="/devis">Demander un devis</a>
                                </div>
                            </div>
                            <div class="overflow-hidden rounded shadow-lg hover:scale-105 transition">
                                <img src="{{URL::asset('/images/couvreurs1.jpg')}}" alt="Toiture 3" class="w-full h-64 object-cover">
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-2">Rénovation</h3>
                                    <p class="text-gray-700 text-sm">Rénovation complète de toiture avec isolation.</p>
                                    <a class="bg-blue-400 hover:bg-blue-500 transition-colors duration-200 text-gray-900 font-medium py-3 px-6 rounded shadow flex justify-center mt-5 cursor-pointer" href="/devis">Demander un devis</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 : Charpente, Couverture, Pose de Velux -->
                    <div class="w-full flex-shrink-0">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="overflow-hidden rounded shadow-lg hover:scale-105 transition">
                                <img src="{{URL::asset('/images/couvreurs1.jpg')}}" alt="Toiture 4" class="w-full h-64 object-cover">
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-2">Charpente</h3>
                                    <p class="text-gray-700 text-sm">Création et rénovation de charpentes traditionnelles.</p>
                                    <a class="bg-blue-400 hover:bg-blue-500 transition-colors duration-200 text-gray-900 font-medium py-3 px-6 rounded shadow flex justify-center mt-5 cursor-pointer" href="/devis">Demander un devis</a>
                                </div>
                            </div>
                            <div class="overflow-hidden rounded shadow-lg hover:scale-105 transition">
                                <img src="{{URL::asset('/images/couvreurs1.jpg')}}" alt="Toiture 5" class="w-full h-64 object-cover">
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-2">Couverture</h3>
                                    <p class="text-gray-700 text-sm">Installation de tuiles, ardoises et zinc.</p>
                                    <a class="bg-blue-400 hover:bg-blue-500 transition-colors duration-200 text-gray-900 font-medium py-3 px-6 rounded shadow flex justify-center mt-5 cursor-pointer" href="/devis">Demander un devis</a>
                                </div>
                            </div>
                            <div class="overflow-hidden rounded shadow-lg hover:scale-105 transition">
                                <img src="{{URL::asset('/images/couvreurs1.jpg')}}" alt="Toiture 6" class="w-full h-64 object-cover">
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-2">Pose de Velux</h3>
                                    <p class="text-gray-700 text-sm">Installation de fenêtres de toit pour plus de lumière.</p>
                                    <a class="bg-blue-400 hover:bg-blue-500 transition-colors duration-200 text-gray-900 font-medium py-3 px-6 rounded shadow flex justify-center mt-5 cursor-pointer" href="/devis">Demander un devis</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 : Zinguerie, Démoussage -->
                    <div class="w-full flex-shrink-0">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="overflow-hidden rounded shadow-lg hover:scale-105 transition">
                                <img src="{{URL::asset('/images/couvreurs1.jpg')}}" alt="Toiture 7" class="w-full h-64 object-cover">
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-2">Zinguerie</h3>
                                    <p class="text-gray-700 text-sm">Gouttières, chéneaux et évacuation des eaux.</p>
                                    <a class="bg-blue-400 hover:bg-blue-500 transition-colors duration-200 text-gray-900 font-medium py-3 px-6 rounded shadow flex justify-center mt-5 cursor-pointer" href="/devis">Demander un devis</a>
                                </div>
                            </div>
                            <div class="overflow-hidden rounded shadow-lg hover:scale-105 transition">
                                <img src="{{URL::asset('/images/couvreurs1.jpg')}}" alt="Toiture 8" class="w-full h-64 object-cover">
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-2">Démoussage</h3>
                                    <p class="text-gray-700 text-sm">Nettoyage et traitement de votre toiture.</p>
                                    <a class="bg-blue-400 hover:bg-blue-500 transition-colors duration-200 text-gray-900 font-medium py-3 px-6 rounded shadow flex justify-center mt-5 cursor-pointer" href="/devis">Demander un devis</a>
                                </div>
                            </div>
                            <div class="overflow-hidden rounded shadow-lg hover:scale-105 transition opacity-0 pointer-events-none">
                                <!-- Card vide pour maintenir l'alignement -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Flèches de navigation -->
            <button onclick="prevSlide()" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 cursor-pointer bg-white hover:bg-gray-100 rounded-full p-3 shadow-lg transition z-10">
                <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button onclick="nextSlide()" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 cursor-pointer bg-white hover:bg-gray-100 rounded-full p-3 shadow-lg transition z-10">
                <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Indicateurs -->
            <div class="flex justify-center mt-8 space-x-2">
                <button onclick="goToSlide(0)" class="indicator w-3 h-3 rounded-full bg-blue-400 transition cursor-pointer"></button>
                <button onclick="goToSlide(1)" class="indicator w-3 h-3 rounded-full bg-gray-300 transition cursor-pointer"></button>
                <button onclick="goToSlide(2)" class="indicator w-3 h-3 rounded-full bg-gray-300 transition cursor-pointer"></button>
            </div>
        </div>
    </div>
</section>

<!--carte ici ??-->

<section>
<div style="width: 100%; height: 400px; border: none;">
    <iframe
        width="100%"
        height="100%"
        frameborder="0"
        style="border:0; border-radius: 12px;"
        referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps?q=7bis,+rue+de+la+Klaize,+14480+Banville,+France&output=embed"
        allowfullscreen>
    </iframe>
</div>
</section>


<!-- Formulaire Contact -->
<section id="contact" class="bg-gray-50">
    <br><br><br>
    <div class="max-w-lg mx-auto bg-gray-50 rounded-lg p-6">
        <h1 class="text-xl font-bold mb-4">Prise de Contact & Rendez-vous</h1>

        @if(session('success'))
            <div class="bg-green-100 border-green-400 text-green-700 px-4 py-3 rounded " role="alert">
                <div class="flex items-center">
                    <!-- <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg> -->
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <form action="{{ route('contact.store') }}" method="POST" class="space-y-4 bg-gray-50 rounded">
            @csrf
            <div>
                <label for="nom" class="block font-medium">Nom</label>
                <input type="text" name="nom" id="nom" value="{{ old('nom') }}" class="w-full border-1 border-gray-600 rounded p-2" required>
                @error('nom') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="prenom" class="block font-medium">Prénom</label>
                <input type="text" name="prenom" id="prenom" value="{{ old('prenom') }}" class="w-full border-1 border-gray-600 rounded p-2" required>
                @error('prenom') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="email" class="block font-medium">E-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full border-1 border-gray-600 rounded p-2" required>
                @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="telephone" class="block font-medium">Téléphone</label>
                <input type="text" name="telephone" id="telephone" value="{{ old('telephone') }}" class="w-full border-1 border-gray-600 rounded p-2">
                @error('telephone') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="objet" class="block font-medium">Objet</label>
                <input type="text" name="objet" id="objet" value="{{ old('objet') }}" class="w-full border-1 border-gray-600 rounded p-2" required>
                @error('objet') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="message" class="block font-medium">Message</label>
                <textarea name="message" id="message" rows="4" class="w-full border-1 border-gray-600 rounded p-2" required>{{ old('message') }}</textarea>
                @error('message') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block font-medium">Prendre rendez-vous ?</label>
                <div class="flex items-center space-x-4 mt-2">
                    <label class="flex items-center">
                        <input type="radio" id="yes" name="ask" value="yes" onclick="visible()" {{ old('ask') === 'yes' ? 'checked' : '' }}>
                        <span class="ml-2">Oui</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" id="no" name="ask" value="no" onclick="invisible()" {{ old('ask') !== 'yes' ? 'checked' : '' }}>
                        <span class="ml-2">Non</span>
                    </label>
                </div>
            </div>

            <div style="display: none;" id="d">
                <label for="appointment" class="font-medium">Date et heure du rendez-vous</label>
                <input 
                    type="datetime-local" 
                    name="appointment" 
                    id="appointment"
                    value="{{ old('appointment') }}"
                    class="w-full border-1 border-gray-600 rounded p-2"
                    min="{{ now()->addHour()->format('Y-m-d\TH:i') }}"
                >
                @error('appointment') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                <small class="text-gray-600 text-sm">Veuillez sélectionner une date et heure futures (minimum 1h à l'avance)</small>
            </div>

            <button type="submit" class="bg-blue-400 text-black font-bold px-4 py-2 rounded shadow-md hover:bg-blue-500 hover:cursor-pointer transition-colors duration-200">
                Envoyer
            </button>
        </form>
        
    </div>
    <br><br>
</section>



</body>
</html>

@endsection
