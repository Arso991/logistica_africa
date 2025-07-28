<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de devis - {{ config('app.name') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }

        .header {
            background: #003169;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }

        .content {
            padding: 20px;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            text-align: center;
            color: #666;
        }

        .btn {
            background: #187945;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Nouvelle demande de devis</h2>
        </div>
        <div class="content">
            <p>Bonjour,</p>
            <p>Un utilisateur vient de soumettre une demande de devis. Voici les détails :</p>

            <table border="0" cellpadding="5" cellspacing="0" width="100%">
                <tr>
                    <td><strong>Société :</strong></td>
                    <td>{{ $data['societe'] ?? 'Non renseigné' }}</td>
                </tr>
                <tr>
                    <td><strong>Email :</strong></td>
                    <td>{{ $data['email'] }}</td>
                </tr>
                <tr>
                    <td><strong>Nom & Prénom :</strong></td>
                    <td>{{ $data['nom'] }} {{ $data['prenoms'] }}</td>
                </tr>
                <tr>
                    <td><strong>Adresse d'intervention :</strong></td>
                    <td>{{ $data['adresseintervention'] }}</td>
                </tr>
                <tr>
                    <td><strong>Description du projet :</strong></td>
                    <td>{{ $data['projetMessage'] }}</td>
                </tr>
            </table>

            @if (!empty($data['plan_topographique']))
                <p>Vous pouvez télécharger le plan topographique en cliquant sur le bouton ci-dessous :</p>
                <p><a href="{{ asset('storage/' . $data['plan_topographique']) }}" class="btn" download>Télécharger
                        le fichier</a></p>
            @endif

            @if (!empty($data['autre_document']))
                <p>Autre document technique:</p>
                <p>
                    <a href="{{ asset('storage/' . $data['autre_document']) }}" class="btn" download>Télécharger le
                        fichier</a>
                </p>
            @endif

            <p>Merci de traiter cette demande rapidement.</p>

            <p>Cordialement,<br> L'équipe {{ config('app.name') }}</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Tous droits réservés.</p>
        </div>
    </div>
</body>

</html>
