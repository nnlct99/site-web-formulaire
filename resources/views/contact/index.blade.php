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

// Mettre à jour le min au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    updateMinDateTime();
});
</script>

@section('content')
<div class="max-w-lg mx-auto bg-white shadow-md border rounded-lg p-6">
    <h1 class="text-xl font-bold mb-4">Prise de Contact & Rendez-vous</h1>

    @if(session('success'))
        <div class="bg-green-100 shadow-md border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
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
    <br> <a href="/contact-dashboard">Contact-dashboard</a>
</div>

<script>
// Afficher le champ rendez-vous si "Oui" était sélectionné après soumission
document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('yes').checked) {
        visible();
    }
});
</script>

@endsection