<?php
require 'connexion_bd.php';
//connexion à la base de données
$table = "ticket";
$connexionManager = new ConnexionBaseDeDonnees();
$connection = $connexionManager->getConnection();

$ticketId = $_GET['id'];

$requete = "SELECT libellé FROM $table WHERE id = $ticketId";
$resultat = mysqli_query($connection, $requete);

if ($resultat) {
    $row = mysqli_fetch_assoc($resultat);
    echo $row['libellé'];
} else {
    echo "Erreur lors de la récupération du libellé : " . mysqli_error($connection);
}

mysqli_close($connection);
?>