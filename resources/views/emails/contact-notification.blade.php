<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouveau message de contact</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f5f5f5; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 0 20px rgba(0,0,0,0.1); }
        .header { background: linear-gradient(135deg, #7c3aed, #5b21b6); color: white; padding: 30px; text-align: center; }
        .content { padding: 30px; }
        .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin: 20px 0; }
        .info-box { background-color: #f8fafc; padding: 15px; border-radius: 8px; border-left: 3px solid #7c3aed; }
        .label { font-weight: bold; color: #7c3aed; font-size: 14px; }
        .value { color: #374151; margin-top: 5px; }
        .message-box { background-color: #faf5ff; border: 1px solid #d8b4fe; padding: 20px; margin-top: 20px; border-radius: 8px; }
        .appointment-box { background-color: #ecfdf5; border: 2px solid #10b981; padding: 15px; margin: 15px 0; border-radius: 8px; text-align: center; }
        .action-buttons { text-align: center; margin: 30px 0; }
        .btn { display: inline-block; padding: 12px 25px; margin: 0 10px; text-decoration: none; border-radius: 5px; font-weight: bold; }
        .btn-reply { background-color: #7c3aed; color: white; }
        .btn-call { background-color: #3b82f6; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📩 Nouveau message de contact</h1>
            <p style="margin: 0; opacity: 0.9;">Message reçu à l'instant</p>
        </div>
        
        <div class="content">
            <p><strong>💌 Vous avez reçu un nouveau message de contact !</strong></p>
            
            <div class="info-grid">
                <div class="info-box">
                    <div class="label">👤 CONTACT</div>
                    <div class="value">
                        {{ $contact->nom }} {{ $contact->prenom }}<br>
                        📧 {{ $contact->email }}<br>
                        @if($contact->telephone)
                            📞 {{ $contact->telephone }}
                        @endif
                    </div>
                </div>
                
                <div class="info-box">
                    <div class="label">📝 DÉTAILS</div>
                    <div class="value">
                        <strong>{{ $contact->objet }}</strong><br>
                        📅 {{ $contact->created_at->format('d/m/Y à H:i') }}
                    </div>
                </div>
            </div>
            
            @if($contact->appointment)
                <div class="appointment-box">
                    <strong>📅 RENDEZ-VOUS DEMANDÉ</strong><br>
                    <span style="font-size: 18px; color: #059669; font-weight: bold;">
                        {{ \Carbon\Carbon::parse($contact->appointment)->format('d/m/Y à H:i') }}
                    </span><br>
                    <small style="color: #6b7280;">N'oubliez pas de confirmer ce rendez-vous</small>
                </div>
            @endif
            
            <div class="message-box">
                <div class="label">💬 MESSAGE :</div>
                <p style="margin-top: 10px; font-style: italic; color: #374151;">{{ $contact->message }}</p>
            </div>
            
            <div class="action-buttons">
                <a href="mailto:{{ $contact->email }}" class="btn btn-reply">📧 Répondre par email</a>
                @if($contact->telephone)
                    <a href="tel:{{ $contact->telephone }}" class="btn btn-call">📞 Appeler</a>
                @endif
            </div>
        </div>
    </div>
</body>
</html>