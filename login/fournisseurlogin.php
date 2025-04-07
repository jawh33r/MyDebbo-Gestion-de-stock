<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MyDebbo | Fournisseur Connexion</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">

</head>
<body>
    <div class="container">
        <h2>Fournisseur Connexion</h2>
        <form action="login.php" method="post">
            <input type="hidden" name="role" value="fournisseur"> 
            <label for="nom">Nom d'utilisateur :</label>
            <input type="text" id="nom" name="nom" required>
            
            <label for="mdp">Mot de passe :</label>
            <input type="password" id="mdp" name="mdp" required>
            
            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>
