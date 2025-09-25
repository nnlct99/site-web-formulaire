<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouveau message de contact</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #10b981; color: white; padding: 20px; text-align: center; }
        .content { background-color: #f9f9f9; padding: 20px; }
        .info-row { margin-bottom: 10px; }
        .label { font-weight: bold; color: #059669; }
        .message-box { background-color: white; border-left: 4px solid #10b981; padding: 15px; margin-top: 20px; }
        .appointment-box { background-color: #ecfdf5; border: 1px solid #10b981; padding: 15px; margin-top: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📩 Nouveau message de contact</h1>
        </div>
        
        <div class="content">
            <p>Bonjour,</p>
            <p>Vous avez reçu un nouveau message de contact :</p>
            
            <div class="info-row">
                <span class="label">Nom :</span> {{ $contact->nom }}
            </div>
            <div class="info-row">
                <span class="label">Prénom :</span> {{ $contact->prenom }}
            </div>
            <div class="info-row">
                <span class="label">Email :</span> {{ $contact->email }}
            </div>
            <div class="info-row">
                <span class="label">Téléphone :</span> {{ $contact->telephone ?? 'Non renseigné' }}
            </div>
            <div class="info-row">
                <span class="label">Objet :</span> {{ $contact->objet }}
            </div>
            <div class="info-row">
                <span class="label">Date :</span> {{ $contact->created_at->format('d/m/Y à H:i') }}
            </div>
            
            @if($contact->appointment)
            <div class="appointment-box">
                <strong>📅 Rendez-vous demandé :</strong><br>
                {{ \Carbon\Carbon::parse($contact->appointment)->format('d/m/Y à H:i') }}
            </div>
            @endif
            
            <div class="message-box">
                <div class="label">Message :</div>
                <p>{{ $contact->message }}</p>
            </div>
            
            <p style="margin-top: 30px;">
                <strong>Pour répondre, vous pouvez directement répondre à cet email.</strong>
            </p>
        </div>
    </div>
</body>
</html>