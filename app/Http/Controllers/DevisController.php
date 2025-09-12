<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;

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

        return redirect()->back()->with('success', 'Votre demande de devis a bien été envoyée.');
    }
}
