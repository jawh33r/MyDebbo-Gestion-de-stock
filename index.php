<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - MyDebbo Gestion de Stock</title>
    <style>
        body {
            background: url('img/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
            position: relative;
        }
        /* Dark overlay */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 30%;
            width: 40%;
            height: 110%;
            background: rgba(0, 0, 0, 0.52); 
            border-radius: 20px;
            z-index: 1;
        }
        .container {
            position: relative;
            z-index: 2;
            margin-top: 10%;
        }
        .logo img {
            width: 150px;
            height: auto;
        }
        .menu {
            margin-top: 20px;
        }
        .menu a {
            display: block;
            margin: 15px auto;
            padding: 15px 25px;
            width: 200px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            position: relative;
            z-index: 2;
        }
        .menu a:hover {
            background: rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="img/logo.png" alt="Logo MyDebbo">
        </div>
        <h1>Bienvenue sur MyDebbo</h1>
        <div class="menu">
            <a href="login/adminlogin.php">Espace Admin</a>
            <a href="login/clientlogin.php">Espace Client</a>
            <a href="login/fournisseurlogin.php">Espace Fournisseur</a>
        </div>
    </div>
</body>
</html>
