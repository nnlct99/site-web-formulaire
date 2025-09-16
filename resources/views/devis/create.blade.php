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
<!-- <img src="/couvreurs1.jpg"> -->
<div class="max-w-lg mx-auto bg-white shadow-md border rounded-lg p-6">
    <h1 class="text-xl font-bold mb-4">Demande de devis</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('devis.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block font-medium">Nom</label>
            <input type="text" name="nom" value="{{ old('nom') }}" class="w-full border rounded p-2">
            @error('nom') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Prénom</label>
            <input type="text" name="prenom" value="{{ old('prenom') }}" class="w-full border rounded p-2">
            @error('prenom') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Téléphone</label>
            <input type="text" name="telephone" value="{{ old('telephone') }}" class="w-full border rounded p-2">
            @error('telephone') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded p-2">
            @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for ="motif" class="block font-medium">Motif</label>
            <select name="motif" id="motif-select">
                
                <option value="motif1">motif1</option>
                <option value="motif2">motif2</option>
                <option value="motif3">motif3</option>
            </select>
            <!-- <input type="text" name="motif" value="{{ old('motif') }}" class="w-full border rounded p-2"> -->
            @error('motif') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>
        <label class="block font-medium">Etes vous une société ?</label>
  
      <input type="radio" id="yes" name="ask" value="yes" onclick="visible()">
      <label for="yes">Oui</label>
      <input type="radio" id="no" name="ask" value="no" onclick="invisible()" checked>
      <label for="no">Non</label><br>


        <div style="display: none;" id="d">
            <label class="block font-medium">Société</label>
            <input type="text" name="societe" value="{{ old('societe') }}" class="w-full border rounded p-2">
            @error('societe') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-medium">Message</label>
            <textarea name="message" rows="5" class="w-full border rounded p-2">{{ old('message') }}</textarea>
            @error('message') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded border">
            Envoyer
        </button>
    </form>

</div>
@endsection
