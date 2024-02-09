<?php
require 'connexion_bd.php';
//connexion à la base de données
$table = "ticket";
$connexionManager = new ConnexionBaseDeDonnees();
$connection = $connexionManager->getConnection();

if (isset($_POST['id']) && isset($_POST['tech'])) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $tech = mysqli_real_escape_string($connection, $_POST['tech']);
    $requete = "UPDATE $table SET tech = '$tech' WHERE id = $id";
    $resultat = mysqli_query($connection, $requete);
    if ($tech == "aucun"){
        $requete = "UPDATE $table SET état = 'ouvert' WHERE id = $id";
        $resultat = mysqli_query($connection, $requete);
    }
    else{
        $requete = "UPDATE $table SET état = 'en cours de traitement' WHERE id = $id";
        $resultat = mysqli_query($connection, $requete);
    }
}
mysqli_close($connection);
?>