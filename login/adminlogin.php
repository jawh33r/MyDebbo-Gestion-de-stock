<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin Connexion</title>
</head>
<body>
    <h2>Admin Connexion</h2>
    <form action="login.php" method="post">
        <input type="hidden" name="role" value="admin"> 
        <label>Nom d'utilisateur : -Admin-</label>
        <input type="text" name="nom" required>
        <br>
        <label>Mot de passe :</label>
        <input type="password" name="mdp" required>
        <br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
