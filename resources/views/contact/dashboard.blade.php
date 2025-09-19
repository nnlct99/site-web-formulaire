@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-6">📩 Messages reçus (Contact)</h1>

    @if($contacts->isEmpty())
        <div class="p-6 bg-blue-50 border border-blue-200 rounded-lg">
            <p class="text-blue-700 font-medium">ℹ Aucun message pour le moment.</p>
        </div>
    @else
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="min-w-full border-collapse">
                <thead class="bg-gray-100 text-gray-700 uppercase text-sm">
                    <tr>
                        <th class="px-6 py-3 text-left">Nom</th>
                        <th class="px-6 py-3 text-left">Prénom</th>
                        <th class="px-6 py-3 text-left">Email</th>
                        <th class="px-6 py-3 text-left">Téléphone</th>
                        <th class="px-6 py-3 text-left">Message</th>
                        <th class="px-6 py-3 text-left">Objet</th>
                        <th class="px-6 py-3 text-left">Date</th>
                        <th class="px-6 py-3 text-left">Rendez-vous</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($contacts as $c)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">{{ $c->nom }}</td>
                            <td class="px-6 py-4">{{ $c->prenom }}</td>
                            <td class="px-6 py-4">{{ $c->email }}</td>
                            <td class="px-6 py-4">{{ $c->telephone ?? '-' }}</td>
                            <td class="px-6 py-4">{{ $c->message }}</td>
                            <td class="px-6 py-4">{{ $c->objet }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $c->created_at->format('d/m/Y H:i') }}</td>
                            <td class="px-6 py-4">
                                @if($c->appointment)
                                    <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded">
                                        {{ $c->appointment }}
                                    </span>
                                @else
                                    <span class="px-2 py-1 text-xs font-medium bg-gray-100 text-gray-500 rounded">-</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
