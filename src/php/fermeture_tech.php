<?php
require 'connexion_bd.php';
require_once 'crypto/rc4.php';
$cle_rc4 = "clesecrete";
//connexion à la base de données
$table = "ticket";
$connexionManager = new ConnexionBaseDeDonnees();
$connection = $connexionManager->getConnection();


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $ticketId = $_GET['id'];
    $updateQuery = "UPDATE $table SET état = 'fermer' WHERE id = ?";
    $stmt = mysqli_prepare($connection, $updateQuery);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $ticketId);
        $result = mysqli_stmt_execute($stmt);
        if ($result) {
            header('Location: techenicien.php');;
        }
        mysqli_stmt_close($stmt);
    }
}
mysqli_close($connection);
?>