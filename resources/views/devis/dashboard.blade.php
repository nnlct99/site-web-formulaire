@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">


    <h1 class="text-2xl font-bold mb-6">📊 Tableau de bord - Liste des devis</h1>

    @if($devis->isEmpty())
        <div class="p-6 bg-yellow-50 border border-yellow-200 rounded-lg">
            <p class="text-yellow-700 font-medium">⚠ Aucun devis enregistré.</p>
        </div>
    @else
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="min-w-full border-collapse">
                <thead class="bg-gray-100 text-gray-700 uppercase text-sm">
                    <tr>
                        <th class="px-6 py-3 text-left">Nom</th>
                        <th class="px-6 py-3 text-left">Prénom</th>
                        <th class="px-6 py-3 text-left">Téléphone</th>
                        <th class="px-6 py-3 text-left">Email</th>
                        <th class="px-6 py-3 text-left">Motif</th>
                        <th class="px-6 py-3 text-left">Message</th>
                        <th class="px-6 py-3 text-left">Société</th>
                        <th class="px-6 py-3 text-left">Date</th>
                        <th class="px-6 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($devis as $d)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">{{ $d->nom }}</td>
                            <td class="px-6 py-4">{{ $d->prenom }}</td>
                            <td class="px-6 py-4">{{ $d->telephone }}</td>
                            <td class="px-6 py-4"><a href="mailto:{{ $d->email }}" class="text-blue-600 hover:underline">
                                {{ $d->email }}
                            </a></td>
                            <td class="px-6 py-4">{{ $d->motif }}</td>
                            
                            <td class="px-6 py-4 max-w-xs truncate">
                            <div class="whitespace-pre-wrap break-words text-gray-800">
                                {{ $d->message }}
                            </div>
                            </td>
                            <td class="px-6 py-4">{{ $d->societe ?? '-' }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $d->created_at->format('d/m/Y H:i') }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <!-- Bouton Voir -->
                                    <button onclick="showDevisModal({{ json_encode($d) }})" 
                                            class="bg-green-500 hover:cursor-pointer hover:bg-green-600 text-white px-3 py-1 rounded-md text-sm font-medium transition-colors duration-200 flex items-center gap-1"
                                            title="Voir le devis en détail">
                                        👁️ Voir
                                    </button>   
                                    
                                    <!-- Bouton Télécharger PDF -->
                                    <a href="{{ route('devis.pdf', $d->id) }}" 
                                       class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md text-sm font-medium transition-colors duration-200 flex items-center gap-1"
                                       title="Télécharger en PDF">
                                        📄 PDF
                                    </a>
                                    
                                    <!-- Bouton Supprimer -->
                                    <form action="{{ route('devis.destroy', $d->id) }}" method="POST" class="inline-block" 
                                          onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce devis ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="bg-red-500 hover:cursor-pointer hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm font-medium transition-colors duration-200 flex items-center gap-1"
                                                title="Supprimer le devis">
                                            🗑️ Supprimer
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @endif
</div>



<!-- Modal pour afficher le devis en détail -->
<div id="devisModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-lg shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-6">
            <!-- Header du modal -->
            <div class="flex justify-between items-center mb-6 pb-4 border-b">
                <h2 class="text-2xl font-bold text-gray-800">📋 Détails du devis</h2>
                <button onclick="closeDevisModal()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            </div>
            
            <!-- Contenu du modal -->
            <div class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="font-semibold text-gray-700">Nom :</span>
                        <p id="modal-nom" class="text-gray-900 mt-1"></p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="font-semibold text-gray-700">Prénom :</span>
                        <p id="modal-prenom" class="text-gray-900 mt-1"></p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="font-semibold text-gray-700">Email :</span>
                        <p id="modal-email" class="text-gray-900 mt-1"></p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="font-semibold text-gray-700">Téléphone :</span>
                        <p id="modal-telephone" class="text-gray-900 mt-1"></p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="font-semibold text-gray-700">Société :</span>
                        <p id="modal-societe" class="text-gray-900 mt-1"></p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <span class="font-semibold text-gray-700">Motif :</span>
                        <p id="modal-motif" class="text-gray-900 mt-1"></p>
                    </div>
                    <div class="bg-gray-50 p-3 rounded md:col-span-2">
                        <span class="font-semibold text-gray-700">Date de création :</span>
                        <p id="modal-date" class="text-gray-900 mt-1"></p>
                    </div>
                </div>
                
                <div class="bg-blue-50 p-4 rounded-lg border-l-4 border-blue-500">
                    <span class="font-semibold text-blue-800">Message :</span>
                    <p id="modal-message" class="text-blue-900 mt-2 whitespace-pre-wrap leading-relaxed"></p>
                </div>
            </div>
            
            <!-- Footer du modal -->
            <div class="mt-6 pt-4 border-t flex justify-end">
                <button onclick="closeDevisModal()" 
                        class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded-md font-medium transition-colors">
                    Fermer
                </button>
            </div>
        </div>
    </div>
</div>

<script>
function showDevisModal(devis) {
    // Remplir les données du modal
    document.getElementById('modal-nom').textContent = devis.nom;
    document.getElementById('modal-prenom').textContent = devis.prenom;
    document.getElementById('modal-email').textContent = devis.email;
    document.getElementById('modal-telephone').textContent = devis.telephone;
    document.getElementById('modal-societe').textContent = devis.societe || 'Non renseignée';
    document.getElementById('modal-motif').textContent = devis.motif;
    document.getElementById('modal-message').textContent = devis.message;
    
    // Formater la date
    const date = new Date(devis.created_at);
    document.getElementById('modal-date').textContent = date.toLocaleDateString('fr-FR', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    });
    
    // Afficher le modal
    document.getElementById('devisModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden'; // Empêcher le scroll de la page
}

function closeDevisModal() {
    document.getElementById('devisModal').classList.add('hidden');
    document.body.style.overflow = 'auto'; // Réactiver le scroll
}

// Fermer le modal en cliquant sur le fond
document.getElementById('devisModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeDevisModal();
    }
});

// Fermer le modal avec la touche Escape
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeDevisModal();
    }
});

</script>
@endsection