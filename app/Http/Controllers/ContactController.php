<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
            'ask' => 'nullable|string|in:yes,no',
            'appointment' => [
                'nullable',
                'date',
                'after:' . now()->addHour()->format('Y-m-d H:i:s')
            ]
        ], [
            'appointment.after' => 'Le rendez-vous doit être programmé au minimum 1 heure à l\'avance.'
        ]);

        // Si l'utilisateur a choisi "Oui" pour le RDV mais n'a pas fourni de date
        if ($request->input('ask') === 'yes' && empty($validated['appointment'])) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['appointment' => 'Veuillez sélectionner une date et heure pour votre rendez-vous.']);
        }

        Contact::create($validated);

        // Message de confirmation différent selon qu'il y ait un rendez-vous ou non
        if (!empty($validated['appointment'])) {
            $appointmentDate = Carbon::parse($validated['appointment'])->locale('fr');
            $formattedDate = $appointmentDate->format('d/m/Y à H\hi');
            $message = '✅ Votre message a bien été envoyé. Rendez-vous confirmé le ' . $formattedDate . ' !';
        } else {
            $message = '✅ Votre message a bien été envoyé. Nous vous recontacterons rapidement.';
        }

        return redirect()->back()->with('success', $message);
    }
    public function index()
    {
        $contacts = Contact::latest()->paginate(10); // 10 messages par page
        return view('contact.dashboard', compact('contacts'));
    }

}