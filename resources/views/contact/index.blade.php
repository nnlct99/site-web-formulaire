@extends('layouts.app')
<script type="text/javascript">
    
function visible()
{
document.getElementById("d").style.display="block";
}

function invisible(){
    document.getElementById("d").style.display="none";
    document.querySelector('input[name="societe"]').value = "";
}
</script>
@section('content')
<div class="max-w-lg mx-auto bg-white shadow-md border rounded-lg p-6">
   

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="w-full border rounded p-2" required>
             @error('nom') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="w-full border rounded p-2" required>
             @error('prenom') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="w-full border rounded p-2" required>
             @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" class="w-full border rounded p-2">
             @error('telephone') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="objet">Objet</label>
            <input type="text" name="objet" class="w-full border rounded p-2" required>
             @error('objet') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="message">Message</label>
            <textarea name="message" rows="4" class="w-full border rounded p-2" required></textarea>
             @error('message') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>
        <label class="block font-medium">Prendre rendez-vous ?</label>
  
      <input type="radio" id="yes" name="ask" value="yes" onclick="visible()">
      <label for="yes">Oui</label>
      <input type="radio" id="no" name="ask" value="no" onclick="invisible()" checked>
      <label for="no">Non</label><br>

    <input type="hidden" id="timezone" name="timezone" value="+02:00" />

        <div style="display: none;" id="d">
            <input type="datetime-local" name="appointment" min="2025-01-01T00:00" max="2050-01-01T00:00" />>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 cursor-pointer hover:bg-white hover:text-black rounded border">Envoyer</button>
    </form>

</div>
@endsection
