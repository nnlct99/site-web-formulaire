@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-xl font-bold mb-4">Détail du devis</h1>
    <p><strong>Nom :</strong> {{ $devis->nom }}</p>
    <p><strong>Email :</strong> {{ $devis->email }}</p>
    <p><strong>Date :</strong> {{ $devis->created_at->format('d/m/Y H:i') }}</p>
</div>
@endsection
