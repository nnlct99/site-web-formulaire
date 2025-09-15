@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Page de Contact</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" class="form-control">
        </div>
        <div class="mb-3">
            <label for="objet">Objet</label>
            <input type="text" name="objet" class="form-control" required>
        <div class="mb-3">
            <label for="message">Message</label>
            <textarea name="message" rows="4" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
@endsection
