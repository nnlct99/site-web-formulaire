@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tableau de bord - Liste des devis</h1>

    @if($devis->isEmpty())
        <p>Aucun devis enregistré.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Motif</th>
                    <th>Message</th>
                    <th>Société</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($devis as $d)
                    <tr>
                        <td>{{ $d->nom }}</td>
                        <td>{{ $d->prenom }}</td>
                        <td>{{ $d->telephone }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->motif }}</td>
                        <td>{{ $d->message }}</td>
                        <td>{{ $d->societe ?? '-' }}</td>
                        <td>{{ $d->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
