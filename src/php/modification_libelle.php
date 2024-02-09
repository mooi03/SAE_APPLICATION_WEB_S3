<?php
require 'connexion_bd.php';
//connexion à la base de données
$table = "ticket";
$connexionManager = new ConnexionBaseDeDonnees();
$connection = $connexionManager->getConnection();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ticketId = $_POST['id'];
    $libelle = $_POST['libelle'];

    $updateQuery = "UPDATE $table SET libellé = '$libelle' WHERE id = $ticketId";
    mysqli_query($connection, $updateQuery);
}

mysqli_close($connection);
?>