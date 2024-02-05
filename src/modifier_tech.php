<?php
$host = "localhost";
$user = "root";
$table = "ticket";
$password = "";
$connexion = mysqli_connect($host, $user, $password) or die ("erreur");
$db = "bd_sae";
$conectdb = mysqli_select_db($connexion, $db) or die ("erreur");
if (isset($_POST['id']) && isset($_POST['tech'])) {
    $id = mysqli_real_escape_string($connexion, $_POST['id']);
    $tech = mysqli_real_escape_string($connexion, $_POST['tech']);
    $requete = "UPDATE $table SET tech = '$tech' WHERE id = $id";
    $resultat = mysqli_query($connexion, $requete);
    if ($tech == "aucun"){
        $requete = "UPDATE $table SET état = 'ouvert' WHERE id = $id";
        $resultat = mysqli_query($connexion, $requete);
    }
    else{
        $requete = "UPDATE $table SET état = 'en cours de traitement' WHERE id = $id";
        $resultat = mysqli_query($connexion, $requete);
    }
}
mysqli_close($connexion);
?>