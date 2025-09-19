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
                            <td class="px-6 py-4">{{ $d->email }}</td>
                            <td class="px-6 py-4">{{ $d->motif }}</td>
                            <td class="px-6 py-4">{{ $d->message }}</td>
                            <td class="px-6 py-4">{{ $d->societe ?? '-' }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $d->created_at->format('d/m/Y H:i') }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-2">
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
                                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm font-medium transition-colors duration-200 flex items-center gap-1"
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

<script>
// Alternative avec SweetAlert2 (optionnel - plus joli)
// Remplacez onsubmit="return confirm..." par onclick="confirmDelete(this)" et ajoutez :
/*
function confirmDelete(button) {
    Swal.fire({
        title: 'Êtes-vous sûr ?',
        text: "Cette action est irréversible !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ef4444',
        cancelButtonColor: '#6b7280',
        confirmButtonText: 'Oui, supprimer !',
        cancelButtonText: 'Annuler'
    }).then((result) => {
        if (result.isConfirmed) {
            button.closest('form').submit();
        }
    });
    return false;
}
*/
</script>
@endsection