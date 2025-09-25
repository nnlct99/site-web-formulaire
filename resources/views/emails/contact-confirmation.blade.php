<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Confirmation de votre message</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f5f5f5; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 0 20px rgba(0,0,0,0.1); }
        .header { background: linear-gradient(135deg, #10b981, #059669); color: white; padding: 30px; text-align: center; }
        .content { padding: 30px; }
        .highlight { background-color: #d1fae5; padding: 20px; border-radius: 8px; margin: 20px 0; border-left: 4px solid #10b981; }
        .appointment-box { background-color: #ecfdf5; border: 2px solid #10b981; padding: 20px; margin: 20px 0; border-radius: 10px; text-align: center; }
        .footer { background-color: #f8fafc; padding: 20px; text-align: center; color: #6b7280; font-size: 14px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>✅ Message bien reçu !</h1>
            <p style="margin: 0; opacity: 0.9;">Merci de nous avoir contactés</p>
        </div>
        
        <div class="content">
            <p>Bonjour <strong>{{ $contact->prenom }} {{ $contact->nom }}</strong>,</p>
            
            <p>Nous avons bien reçu votre message concernant : <strong>{{ $contact->objet }}</strong></p>
            
            @if($contact->appointment)
                <div class="appointment-box">
                    <h3 style="margin-top: 0; color: #059669;">📅 Rendez-vous confirmé</h3>
                    <p style="font-size: 18px; font-weight: bold; color: #059669; margin: 0;">
                        {{ \Carbon\Carbon::parse($contact->appointment)->format('d/m/Y à H:i') }}
                    </p>
                    <p style="margin-top: 10px; color: #374151;">
                        Nous vous attendons à cette date. Un email de rappel vous sera envoyé la veille.
                    </p>
                </div>
            @endif
            
            <div class="highlight">
                <h3 style="margin-top: 0; color: #059669;">📋 Résumé de votre message</h3>
                <p><strong>Objet :</strong> {{ $contact->objet }}</p>
                <p><strong>Message :</strong> {{ $contact->message }}</p>
                @if($contact->telephone)
                    <p><strong>Téléphone :</strong> {{ $contact->telephone }}</p>
                @endif
                <p><strong>Date d'envoi :</strong> {{ $contact->created_at->format('d/m/Y à H:i') }}</p>
            </div>
            
            <p>🕒 <strong>Nous vous recontacterons rapidement</strong> pour répondre à votre demande.</p>
            
            <p>📞 Pour toute urgence, vous pouvez nous contacter directement au <strong>XX XX XX XX XX</strong>.</p>
            
            <p>Cordialement,<br>
            <strong>L'équipe Anne Couverture</strong></p>
        </div>
        
        <div class="footer">
            <p>Anne Couverture - Spécialiste en couverture et toiture<br>
            Email: contact@annecouverture.fr | Tél: XX XX XX XX XX</p>
        </div>
    </div>
</body>
</html>