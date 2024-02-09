<?php
$host = "localhost";
$user = "root";
$password = "tutu";
$connexion = mysqli_connect($host, $user, $password) or die("erreur");
$db = "bd_sae";
$conectdb = mysqli_select_db($connexion, $db) or die("erreur");
$table = "ticket";
$ticketId = $_GET['id'];

$requete = "SELECT libellé FROM $table WHERE id = $ticketId";
$resultat = mysqli_query($connexion, $requete);

if ($resultat) {
    $row = mysqli_fetch_assoc($resultat);
    echo $row['libellé'];
} else {
    echo "Erreur lors de la récupération du libellé : " . mysqli_error($connexion);
}

mysqli_close($connexion);
?>