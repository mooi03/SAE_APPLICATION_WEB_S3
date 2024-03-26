<?php
require 'connexion_bd.php';
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
            header('Location: ../html/admin_system.php');;
        }
        mysqli_stmt_close($stmt);
    }
}
mysqli_close($connection);
?>