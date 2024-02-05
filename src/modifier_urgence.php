<?php
$host = "localhost";
$user = "root";
$table = "ticket";
$password = "";
$connexion = mysqli_connect($host, $user, $password) or die ("erreur");
$db = "bd_sae";
$conectdb = mysqli_select_db($connexion, $db) or die ("erreur");

if (isset($_POST['id']) && isset($_POST['urgence'])) {
    $id = mysqli_real_escape_string($connexion, $_POST['id']);
    $urgence = mysqli_real_escape_string($connexion, $_POST['urgence']);

    $requete = "UPDATE $table SET urgence = '$urgence' WHERE id = $id";
    $resultat = mysqli_query($connexion, $requete);
}

mysqli_close($connexion);
?>