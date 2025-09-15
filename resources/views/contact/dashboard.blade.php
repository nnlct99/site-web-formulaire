@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Messages reçus (Contact)</h1>

    @if($contacts->isEmpty())
        <p>Aucun message pour le moment.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Message</th>
                    <th>Objet</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $c)
                    <tr>
                        <td>{{ $c->nom }}</td>
                        <td>{{ $c->prenom }}</td>
                        <td>{{ $c->email }}</td>
                        <td>{{ $c->telephone ?? '-' }}</td>
                        <td>{{ $c->message }}</td>
                        <td>{{ $c->objet }}</td>
                        <td>{{ $c->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
