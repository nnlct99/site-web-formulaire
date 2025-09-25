<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouvelle demande de devis</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #3b82f6; color: white; padding: 20px; text-align: center; }
        .content { background-color: #f9f9f9; padding: 20px; }
        .info-row { margin-bottom: 10px; }
        .label { font-weight: bold; color: #2563eb; }
        .message-box { background-color: white; border-left: 4px solid #3b82f6; padding: 15px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📋 Nouvelle demande de devis</h1>
        </div>
        
        <div class="content">
            <p>Bonjour,</p>
            <p>Vous avez reçu une nouvelle demande de devis :</p>
            
            <div class="info-row">
                <span class="label">Nom :</span> {{ $devis->nom }}
            </div>
            <div class="info-row">
                <span class="label">Prénom :</span> {{ $devis->prenom }}
            </div>
            <div class="info-row">
                <span class="label">Email :</span> {{ $devis->email }}
            </div>
            <div class="info-row">
                <span class="label">Téléphone :</span> {{ $devis->telephone }}
            </div>
            <div class="info-row">
                <span class="label">Société :</span> {{ $devis->societe ?? 'Non renseignée' }}
            </div>
            <div class="info-row">
                <span class="label">Motif :</span> {{ $devis->motif }}
            </div>
            <div class="info-row">
                <span class="label">Date :</span> {{ $devis->created_at->format('d/m/Y à H:i') }}
            </div>
            
            <div class="message-box">
                <div class="label">Message :</div>
                <p>{{ $devis->message }}</p>
            </div>
            
            <p style="margin-top: 30px;">
                <strong>Pour répondre, vous pouvez directement répondre à cet email.</strong>
            </p>
        </div>
    </div>
</body>
</html>