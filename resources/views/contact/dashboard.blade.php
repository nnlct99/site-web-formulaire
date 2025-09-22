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
            <table class="min-w-full border-collapse mt-5">
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
                        <th class="px-6 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($contacts as $c)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">{{ $c->nom }}</td>
                            <td class="px-6 py-4">{{ $c->prenom }}</td>
                            <td class="px-6 py-4">
                            <a href="mailto:{{ $c->email }}" class="text-blue-600 hover:underline">
                                {{ $c->email }}
                            </a>
                        </td>
                            <td class="px-6 py-4">{{ $c->telephone ?? '-' }}</td>
                            <td class="px-6 py-4 max-w-xs truncate">
                            <div class="whitespace-pre-wrap break-words text-gray-800">
                                {{ $c->message }}
                            </div>
                            </td>
                            <td class="px-6 py-4">{{ $c->objet }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $c->created_at->format('d/m/Y H:i') }}</td>
                            <td class="px-6 py-4">
                              @if($c->appointment)
                                <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-700 rounded">
                                    {{ \Carbon\Carbon::parse($c->appointment)->format('d/m/Y H:i') }}
                                </span>
                            @else
                                <span class="px-2 py-1 text-xs font-medium bg-gray-100 text-gray-500 rounded">-</span>
                            @endif

                            </td>
                  
                          <td class="px-6 py-4">
                              <!-- Bouton Répondre-->
                            <a href="mailto:{{ $c->email }}" 
                                   class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded font-medium text-sm mr-2 transition-colors duration-200">
                                    📧 Répondre
                                </a>
                            <!-- Bouton Supprimer -->
                                    <form action="{{ route('contact.destroy', $c->id) }}" method="POST" class="inline-block" 
                                          onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="mt-2 bg-red-500 hover:bg-red-600 hover:cursor-pointer text-white px-3 py-1 rounded-md text-sm font-medium transition-colors duration-200 items-center"
                                                title="Supprimer le message">
                                            🗑️ Supprimer
                                        </button>
                                    </form>                    
                      
                        </td>
                        </tr>
                                           
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Pagination flottante -->
        <div id="floatingPagination" class="fixed bottom-4 left-1/2 transform -translate-x-1/2 z-50 bg-white shadow-lg rounded-full px-4 py-2 flex space-x-2">
            {{ $contacts->links('pagination::tailwind') }}
        </div>

       
    @endif
</div>

<a href="/contact">/contact</a>
@endsection
