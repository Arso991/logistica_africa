    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Message de Contact - {{ config('app.name') }}</title>
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
                <h2>Nouveau message de contact</h2>
            </div>
            <div class="content">
                <p>Bonjour,</p>
                <p>Vous avez reçu un nouveau mail de contact de : {{ $mailData['email'] }} :</p>

                <table border="0" cellpadding="5" cellspacing="0" width="100%">
                    <tr>
                        <td><strong>Nom :</strong></td>
                        <td>{{ $mailData['lastname'] }}</td>
                    </tr>
                    <tr>
                        <td><strong>Prénoms :</strong></td>
                        <td>{{ $mailData['firstname'] }}</td>
                    </tr>
                    <tr>
                        <td><strong>Message :</strong></td>
                        <td>{{ $mailData['message'] }}</td>
                    </tr>
                </table>

                <p>Cordialement,<br> L'équipe {{ config('app.name') }}</p>
            </div>
            <div class="footer">
                <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Tous droits réservés.</p>
            </div>
        </div>
    </body>

    </html>
