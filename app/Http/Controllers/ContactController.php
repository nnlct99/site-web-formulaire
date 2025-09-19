<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'nullable|string|max:20',
            'objet' => 'required|string|max:255',
            'message' => 'required|string',
            'appointment'=>'nullable|date'
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Votre message a bien été envoyé.');
    }

    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('contact.dashboard', compact('contacts'));
    }
    // public function destroy($id)
    // {
    //     $contacts = Contact::findOrFail($id);
    //     $contacts->delete();
    //     return redirect()->route('contact.index')->with('success', 'Message supprimé');
    // }

}
