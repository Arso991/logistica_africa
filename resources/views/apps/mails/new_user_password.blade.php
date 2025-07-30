<!-- resources/views/mail/new_user_password.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre mot de passe temporaire</title>
</head>

<body>
    <p>Bonjour {{ $user->name }},</p>
    <p>Votre compte a été créé avec succès. Voici vos identifiants de connexion temporaires :</p>
    <p><strong>Email :</strong> {{ $user->email }}</p>
    <p><strong>Mot de passe temporaire :</strong> {{ $generatedPassword }}</p>
    <p>Veuillez vous connecter et changer votre mot de passe dès que possible.</p>
    <p><a href="{{ url('/admin') }}">Se connecter</a></p> 
    <p>Cordialement,<br>L'équipe d'administration</p>
</body>
</html>
