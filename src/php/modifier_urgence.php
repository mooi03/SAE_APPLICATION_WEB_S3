<?php
require 'connexion_bd.php';
//connexion à la base de données
$table = "ticket";
$connexionManager = new ConnexionBaseDeDonnees();
$connection = $connexionManager->getConnection();


if (isset($_POST['id']) && isset($_POST['urgence'])) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $urgence = mysqli_real_escape_string($connection, $_POST['urgence']);

    $requete = "UPDATE $table SET urgence = '$urgence' WHERE id = $id";
    $resultat = mysqli_query($connection, $requete);
}

mysqli_close($connection);
?>