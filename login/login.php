<?php
session_start();
include '../db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];
    $role = $_POST['role'];

    $query = "SELECT * FROM `utilisateur` WHERE `nom`='$nom' AND `role`='$role'";
    $res = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($res);

    if ($user && $mdp == $user['mdp']) {
        $_SESSION['nom'] = $nom;
        $_SESSION['role'] = $role;
        if ($role == "admin") {
            header("Location: ../dashboard/admin.php");
        } elseif ($role == "client") {
            header("Location: ../dashboard/client.php");
        } elseif ($role == "fournisseur") {
            header("Location: ../dashboard/fourni.php");
        }
        exit();
    } else {
        echo "Nom  ou mot de passe incorrect.";
    }
}
?>
