<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactConfirmation;
use App\Mail\ContactNotification;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

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

        if ($request->input('ask') === 'yes' && empty($validated['appointment'])) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['appointment' => 'Veuillez sélectionner une date et heure pour votre rendez-vous.']);
        }

        $contact = Contact::create($validated);

        try {
            // 1. Email de confirmation au client
            Mail::to($contact->email)->send(new ContactConfirmation($contact));
            
            // 2. Email de notification à l'entreprise
            Mail::to(config('mail.from.address'))->send(new ContactNotification($contact));
            
        } catch (\Exception $e) {
            \Log::error('Erreur envoi email contact: ' . $e->getMessage());
        }

        // Message de confirmation différent selon qu'il y ait un rendez-vous ou non
        if (!empty($validated['appointment'])) {
            $appointmentDate = Carbon::parse($validated['appointment'])->locale('fr');
            $formattedDate = $appointmentDate->format('d/m/Y à H\hi');
            $message = '✅ Votre message a bien été envoyé. Rendez-vous confirmé le ' . $formattedDate . ' ! Vous allez recevoir une confirmation par email.';
        } else {
            $message = '✅ Votre message a bien été envoyé. Nous vous recontacterons rapidement. Vous allez recevoir une confirmation par email.';
        }

        return redirect()->back()->with('success', $message);
    }

    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('contact.dashboard', compact('contacts'));
    }

    public function destroy($id)
    {
        $contactdelete = Contact::findOrFail($id);
        $contactdelete->delete();
        
        return redirect()->back()->with('success', 'Message supprimé avec succès !');
    }
}