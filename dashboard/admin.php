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
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
</head>
<body>
    <h2>Bienvenue, <?php echo $_SESSION['nom']; ?> (Admin)</h2>
    <a href="../logout.php">Déconnexion</a>
</body>
</html>
