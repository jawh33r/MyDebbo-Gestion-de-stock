<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login/fournisseurlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Fournisseur</title>
</head>
<body>
    <h2>Bienvenue, <?php echo $_SESSION['username']; ?> (Fournisseur)</h2>
    <a href="../logout.php">Déconnexion</a>
</body>
</html>
