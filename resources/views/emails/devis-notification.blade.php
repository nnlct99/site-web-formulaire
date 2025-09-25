<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouvelle demande de devis</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #dc2626; color: white; padding: 20px; text-align: center; }
        .content { background-color: #f9f9f9; padding: 20px; }
        .info-row { margin-bottom: 10px; }
        .label { font-weight: bold; color: #dc2626; }
        .message-box { background-color: white; border-left: 4px solid #dc2626; padding: 15px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚨 NOUVELLE DEMANDE DE DEVIS</h1>
        </div>
        
        <div class="content">
            <p><strong>Une nouvelle demande de devis vient d'arriver !</strong></p>
            
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
                <span class="label">Société :</span> {{ $devis->societe ?? 'Particulier' }}
            </div>
            <div class="info-row">
                <span class="label">Motif :</span> {{ $devis->motif }}
            </div>
            
            <div class="message-box">
                <div class="label">Message :</div>
                <p>{{ $devis->message }}</p>
            </div>
            
            <p><strong>👉 Vous pouvez répondre directement à cet email pour contacter le client.</strong></p>
        </div>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouvelle demande de devis</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f5f5f5; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 0 20px rgba(0,0,0,0.1); }
        .header { background: linear-gradient(135deg, #dc2626, #b91c1c); color: white; padding: 30px; text-align: center; }
        .content { padding: 30px; }
        .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin: 20px 0; }
        .info-box { background-color: #f8fafc; padding: 15px; border-radius: 8px; border-left: 3px solid #dc2626; }
        .label { font-weight: bold; color: #dc2626; font-size: 14px; }
        .value { color: #374151; margin-top: 5px; }
        .message-box { background-color: #fef2f2; border: 1px solid #fecaca; padding: 20px; margin-top: 20px; border-radius: 8px; }
        .priority { background-color: #dc2626; color: white; padding: 5px 15px; border-radius: 20px; font-size: 12px; display: inline-block; margin-bottom: 15px; }
        .action-buttons { text-align: center; margin: 30px 0; }
        .btn { display: inline-block; padding: 12px 25px; margin: 0 10px; text-decoration: none; border-radius: 5px; font-weight: bold; }
        .btn-reply { background-color: #059669; color: white; }
        .btn-call { background-color: #3b82f6; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="priority">🚨 URGENT</div>
            <h1>Nouvelle demande de devis</h1>
            <p style="margin: 0; opacity: 0.9;">Action requise dans les 24h</p>
        </div>
        
        <div class="content">
            <p><strong>🎯 Une nouvelle demande de devis vient d'arriver !</strong></p>
            
            <div class="info-grid">
                <div class="info-box">
                    <div class="label">👤 CONTACT</div>
                    <div class="value">
                        {{ $devis->nom }} {{ $devis->prenom }}<br>
                        📧 {{ $devis->email }}<br>
                        📞 {{ $devis->telephone }}
                    </div>
                </div>
                
                <div class="info-box">
                    <div class="label">🏢 PROJET</div>
                    <div class="value">
                        <strong>{{ $devis->motif }}</strong><br>
                        @if($devis->societe)
                            Société: {{ $devis->societe }}<br>
                        @else
                            Type: Particulier<br>
                        @endif
                        📅 {{ $devis->created_at->format('d/m/Y à H:i') }}
                    </div>
                </div>
            </div>
            
            <div class="message-box">
                <div class="label">💬 MESSAGE DU CLIENT :</div>
                <p style="margin-top: 10px; font-style: italic; color: #374151;">{{ $devis->message }}</p>
            </div>
            
            <div class="action-buttons">
                <a href="mailto:{{ $devis->email }}" class="btn btn-reply">📧 Répondre par email</a>
                <a href="tel:{{ $devis->telephone }}" class="btn btn-call">📞 Appeler maintenant</a>
            </div>
            
            <p style="background-color: #ecfdf5; padding: 15px; border-radius: 8px; border-left: 4px solid #10b981; margin-top: 30px;">
                <strong>💡 Conseil :</strong> Répondez rapidement pour augmenter vos chances de décrocher ce projet ! 
                Un devis rapide fait souvent la différence.
            </p>
        </div>
    </div>
</body>
</html>