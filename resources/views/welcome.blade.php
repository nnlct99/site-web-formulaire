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

@section('content')

<!-- Hero Section -->
<section class="h-screen bg-cover bg-center" style=" background-image: url(/images/couvreurs2.jpg);background-repeat:no-repeat; background-position:center center; background-attachment : fixed ">
    
    <div class=" h-full flex flex-col justify-center items-center text-center px-4">
       
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Anne Couverture</h1>
        <p class="text-white text-lg md:text-2xl mb-6">Votre toiture, notre expertise</p>
        <a href="#devis" class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-2 px-4 rounded shadow">Demander un devis</a>
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
                    <a class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-medium py-3 px-6 rounded shadow flex justify-center mt-5" href="/devis">Demander un devis</a>
                </div>
            </div>
            <div class="overflow-hidden rounded shadow-lg hover:scale-105 transition">
                <img src="{{URL::asset('/images/couvreurs1.jpg')}}" alt="Toiture 2" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Toiture traditionnelle</h3>
                    <p class="text-gray-700 text-sm">Rénovation d’une toiture en tuiles avec isolation complète.</p>
                    <a class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-medium py-3 px-6 rounded shadow flex justify-center mt-5" href="/devis">Demander un devis</a>
                </div>
            </div>
            <div class="overflow-hidden rounded shadow-lg hover:scale-105 transition">
                <img src="{{URL::asset('/images/couvreurs1.jpg')}}" alt="Toiture 3" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Toiture traditionnelle</h3>
                    <p class="text-gray-700 text-sm">Rénovation d’une toiture en tuiles avec isolation complète.</p>
                    <a class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-medium py-3 px-6 rounded shadow flex justify-center mt-5" href="/devis">Demander un devis</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Formulaire Contact -->
<section id="contact">
    <br><br><br>
    <div class="max-w-lg mx-auto border rounded-lg p-6">
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

        <form action="{{ route('contact.store') }}" method="POST" class="space-y-4 bg-white shadow-md rounded">
            @csrf
            <div>
                <label for="nom" class="block font-medium">Nom</label>
                <input type="text" name="nom" id="nom" value="{{ old('nom') }}" class="w-full shadow-md rounded p-2" required>
                @error('nom') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="prenom" class="block font-medium">Prénom</label>
                <input type="text" name="prenom" id="prenom" value="{{ old('prenom') }}" class="w-full shadow-md rounded p-2" required>
                @error('prenom') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="email" class="block font-medium">E-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full shadow-md rounded p-2" required>
                @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="telephone" class="block font-medium">Téléphone</label>
                <input type="text" name="telephone" id="telephone" value="{{ old('telephone') }}" class="w-full shadow-md rounded p-2">
                @error('telephone') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="objet" class="block font-medium">Objet</label>
                <input type="text" name="objet" id="objet" value="{{ old('objet') }}" class="w-full shadow-md rounded p-2" required>
                @error('objet') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="message" class="block font-medium">Message</label>
                <textarea name="message" id="message" rows="4" class="w-full shadow-md rounded p-2" required>{{ old('message') }}</textarea>
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
                    class="w-full shadow-md rounded p-2"
                    min="{{ now()->addHour()->format('Y-m-d\TH:i') }}"
                >
                @error('appointment') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                <small class="text-gray-600 text-sm">Veuillez sélectionner une date et heure futures (minimum 1h à l'avance)</small>
            </div>

            <button type="submit" class="bg-yellow-400 text-black font-bold px-4 py-2 rounded shadow-md hover:bg-yellow-500 hover:cursor-pointer transition-colors duration-200">
                Envoyer
            </button>
        </form>
        
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


</body>
</html>

@endsection
