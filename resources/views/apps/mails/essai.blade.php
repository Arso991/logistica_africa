<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande d'essai - {{ config('app.name') }}</title>
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
            <h2>Nouvelle demande d'essai</h2>
        </div>
        <div class="content">
            <p>Bonjour,</p>
            <p>Un utilisateur vient de soumettre une demande d'essai pour un service. Voici les détails :</p>

            <table border="0" cellpadding="5" cellspacing="0" width="100%">
                <tr>
                    <td><strong>Nom & Prénom :</strong></td>
                    <td>{{ $orderTest->lastname }} {{ $orderTest->firstname }}</td>
                </tr>
                <tr>
                    <td><strong>Adresse :</strong></td>
                    <td>{{ $orderTest->address }}</td>
                </tr>
                <tr>
                    <td><strong>Email :</strong></td>
                    <td>{{ $orderTest->email }}</td>
                </tr>
                <tr>
                    <td><strong>Téléphone :</strong></td>
                    <td>{{ $orderTest->phone }}</td>
                </tr>
                <tr>
                    <td><strong>Service demandé :</strong></td>
                    <td>{{ $orderTest->service->title }}</td>
                </tr>
                <tr>
                    <td><strong>Commune :</strong></td>
                    <td>{{ $orderTest->commune->name }}</td>
                </tr>
                <tr>
                    <td><strong>Type de bâtiment :</strong></td>
                    <td>{{ $orderTest->building_type }}</td>
                </tr>
            </table>

            @if (!empty($orderTest->topographic_survey))
                <p>Vous pouvez télécharger la levée topographique en cliquant sur le bouton ci-dessous :</p>
                <p><a href="{{ asset($orderTest->topographic_survey) }}" class="btn" target="_blank">Télécharger
                        le fichier</a></p>
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
