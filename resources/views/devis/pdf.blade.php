<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Devis - {{ $devis->nom }} {{ $devis->prenom }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .header { text-align: center; margin-bottom: 30px; }
        .info-row { margin-bottom: 10px; }
        .label { font-weight: bold; }
        .message-box { border: 1px solid #ddd; padding: 15px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>📋 Demande de Devis</h1>
        <p>Générée le {{ now()->format('d/m/Y à H:i') }}</p>
    </div>
    
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
        <span class="label">Date de demande :</span> {{ $devis->created_at->format('d/m/Y à H:i') }}
    </div>
    
    <div class="message-box">
        <div class="label">Message :</div>
        <p>{{ $devis->message }}</p>
    </div>
</body>
</html>