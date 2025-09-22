<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;

 use Barryvdh\DomPDF\Facade\Pdf;

class DevisController extends Controller
{
    public function create()
    {
        return view('devis.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'motif' => 'required|string|max:255',
            'message' => 'required|string',
            'societe'=> 'nullable|string|max:255',
        ]);

        Devis::create($validated);

        return redirect()->back()->with('success', '✅ Votre demande de devis a bien été envoyée. Nous vous recontacterons rapidement.');
    }

    public function index()
    {
        // Récupère tous les devis avec pagination (10 par page)
        $devis = Devis::latest()->paginate(10);

        // Envoie à la vue "dashboard"
        return view('devis.dashboard', compact('devis'));
    }

    
//     public function show($id)
// {    
//     $devis = Devis::findOrFail($id);
//     return view('devis.show', compact('devis'));
// }

    public function destroy($id)
{
    $devis = Devis::findOrFail($id);
    $devis->delete();
    
    return redirect()->back()->with('success', 'Devis supprimé avec succès !');
}


public function generatePdf($id)
{
    $devis = Devis::findOrFail($id);

    $pdf = Pdf::loadView('devis.pdf', compact('devis'));

    return $pdf->download('devis_' . $devis->nom . '_' . $devis->prenom . '.pdf');
}


}
