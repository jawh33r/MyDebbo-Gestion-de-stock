<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Client Connexion</title>
</head>
<body>
    <h2>Client Connexion</h2>
    <form action="login.php" method="post">
        <input type="hidden" name="role" value="client"> 
        <label>Nom d'utilisateur : -Client-</label>
        <input type="text" name="username" required>
        <br>
        <label>Mot de passe :</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
