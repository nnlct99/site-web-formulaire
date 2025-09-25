<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Confirmation de votre demande</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #3b82f6; color: white; padding: 20px; text-align: center; }
        .content { background-color: #f9f9f9; padding: 20px; }
        .highlight { background-color: #dbeafe; padding: 15px; border-radius: 5px; margin: 15px 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>✅ Demande bien reçue !</h1>
        </div>
        
        <div class="content">
            <p>Bonjour {{ $devis->prenom }} {{ $devis->nom }},</p>
            
            <p>Merci pour votre demande de devis concernant : <strong>{{ $devis->motif }}</strong></p>
            
            <div class="highlight">
                <h3>📋 Résumé de votre demande :</h3>
                <p><strong>Motif :</strong> {{ $devis->motif }}</p>
                <p><strong>Message :</strong> {{ $devis->message }}</p>
                @if($devis->societe)
                    <p><strong>Société :</strong> {{ $devis->societe }}</p>
                @endif
            </div>
            
            <p><strong>Nous vous recontacterons dans les 24h ouvrées</strong> pour étudier votre projet et vous proposer un devis personnalisé.</p>
            
            <p>En attendant, n'hésitez pas à nous contacter au <strong>[votre téléphone]</strong> si vous avez des questions.</p>
            
            <p>Cordialement,<br>
            L'équipe Anne Couverture</p>
        </div>
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Confirmation de votre demande</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f5f5f5; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 0 20px rgba(0,0,0,0.1); }
        .header { background: linear-gradient(135deg, #3b82f6, #1d4ed8); color: white; padding: 30px; text-align: center; }
        .content { padding: 30px; }
        .highlight { background-color: #dbeafe; padding: 20px; border-radius: 8px; margin: 20px 0; border-left: 4px solid #3b82f6; }
        .footer { background-color: #f8fafc; padding: 20px; text-align: center; color: #6b7280; font-size: 14px; }
        .button { display: inline-block; background-color: #3b82f6; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; margin: 15px 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>✅ Demande bien reçue !</h1>
            <p style="margin: 0; opacity: 0.9;">Merci pour votre confiance</p>
        </div>
        
        <div class="content">
            <p>Bonjour <strong>{{ $devis->prenom }} {{ $devis->nom }}</strong>,</p>
            
            <p>Nous avons bien reçu votre demande de devis concernant : <strong>{{ $devis->motif }}</strong></p>
            
            <div class="highlight">
                <h3 style="margin-top: 0; color: #1d4ed8;">📋 Résumé de votre demande</h3>
                <p><strong>Motif :</strong> {{ $devis->motif }}</p>
                <p><strong>Message :</strong> {{ $devis->message }}</p>
                @if($devis->societe)
                    <p><strong>Société :</strong> {{ $devis->societe }}</p>
                @endif
                <p><strong>Date de demande :</strong> {{ $devis->created_at->format('d/m/Y à H:i') }}</p>
            </div>
            
            <p>🕒 <strong>Nous vous recontacterons dans les 24h ouvrées</strong> pour étudier votre projet et vous proposer un devis personnalisé adapté à vos besoins.</p>
            
            <p>📞 En attendant, n'hésitez pas à nous contacter au <strong>XX XX XX XX XX</strong> si vous avez des questions urgentes.</p>
            
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