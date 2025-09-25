<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use App\Mail\DevisConfirmation;
use App\Mail\DevisNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;

class DevisController extends Controller{

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

        $devis = Devis::create($validated);

        try {
            // 1. Email de confirmation à la personne qui a fait la demande
            Mail::to($devis->email)->send(new DevisConfirmation($devis));
            
            // 2. Email de notification pour moi
            Mail::to(config('mail.from.address'))->send(new DevisNotification($devis));
            
        } catch (\Exception $e) {
            \Log::error('Erreur envoi email devis: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', '✅ Votre demande de devis a bien été envoyée. Vous allez recevoir une confirmation par email.');
    }

//transferer tout ca
//

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
