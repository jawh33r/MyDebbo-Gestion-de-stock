<?php
session_start();
if (!isset($_SESSION['nom']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login/clientlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <title>Dashboard Client</title>
</head>
<body>
    <h2>Bienvenue, <?php echo $_SESSION['nom']; ?> (Client)</h2>
    <a href="../logout.php">Déconnexion</a>
</body>
</html>
