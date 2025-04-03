<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "mydebbo_db";

$conn = new mysqli($host, $user, $pass, $bd);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
