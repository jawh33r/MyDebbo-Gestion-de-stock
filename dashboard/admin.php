<?php
session_start();
if (!isset($_SESSION['nom']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login/adminlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <title>MyDebbo | Dashboard Admin</title>
</head>
<body>
    <div class="container">
    <h2>MyDebbo | Dashboard Admin</h2>
    <h2>Bienvenue <?php echo $_SESSION['nom']; ?> (Admin)</h2>
        <div class="menu">
            <a href="admin.php">Tableau de Bord ☰</a>
            <a href="updateclients.php">Gérer les Clients ✏️🧑🏻‍💼</a>
            <a href="updatefournisseurs.php">Gérer les Fournisseurs ✏️🚚</a>
            <a href="vuecommandes.php">Voir les Commandes 👁️📋</a>
        </div>
        
        <div class="dashboard">
            <h3>Panneau d'Administration</h3>
            <a href="adminprofile.php">Profile Admin 🛡️</a>
            <a href="addclient.php">Ajouter Client ✚🧑🏻‍💼</a>
            <a href="addfourni.php">Ajouter Fournisseur ✚🚚</a>
        </div>

        <a href="../logout.php" class="logout">Déconnexion</a>
    </div>
</body>
</html>
