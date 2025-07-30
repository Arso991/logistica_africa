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
            background: black;
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
            background: #fff1e7;
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
                    <td><strong>Nom & Prénom :</strong></td>
                    <td>{{ $devisData['client_lastname'] }} {{ $devisData['client_firstname'] }}</td>
                </tr>
                <tr>
                    <td><strong>Email :</strong></td>
                    <td>{{ $devisData['client_email'] }}</td>
                </tr>
                @if (!empty($devisData['client_company']))
                    <tr>
                        <td><strong>Entreprise :</strong></td>
                        <td>{{ $devisData['client_company'] ?? 'Non renseigné' }}</td>
                    </tr>
                @endif

                @if (!empty($devisData['client_phone']))
                    <tr>
                        <td><strong>Téléphone :</strong></td>
                        <td>{{ $devisData['client_phone'] ?? 'Non renseigné' }}</td>
                    </tr>
                @endif

                @if (!empty($devisData['client_role']))
                    <tr>
                        <td><strong>Fonction :</strong></td>
                        <td>{{ $devisData['client_role'] }}</td>
                    </tr>
                @endif

                @if (!empty($devisData['motif']))
                    <tr>
                        <td><strong>Motif :</strong></td>
                        <td>{{ $devisData['motif'] }}</td>
                    </tr>
                @endif

                @if (!empty($devisData['cart']))
                    <tr>
                        <td><strong>Engins :</strong></td>
                        <td>
                            @foreach ($devisData['cart'] as $item)
                                <p><span>{{ $item['product']['name'] }}</span> * <span>{{ $item['qty'] }}</span></p>
                            @endforeach
                        </td>
                    </tr>
                @endif
            </table>

            <p>Merci de traiter cette demande rapidement.</p>

            <p>Cordialement,<br> L'équipe {{ config('app.name') }}</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Tous droits réservés.</p>
        </div>
    </div>
</body>

</html>
