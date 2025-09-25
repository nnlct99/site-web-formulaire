<?php

namespace App\Mail;

use App\Models\Devis;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DevisReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $devis;

    public function __construct(Devis $devis)
    {
        $this->devis = $devis;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouvelle demande de devis - ' . $this->devis->nom . ' ' . $this->devis->prenom,
            replyTo: $this->devis->email
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.devis-received',
        );
    }
}