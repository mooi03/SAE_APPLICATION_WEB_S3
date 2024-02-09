<?php
$host = "localhost";
$user = "root";
$password = "tutu";
$connexion = mysqli_connect($host, $user, $password) or die("Erreur de connexion");


$db = "bd_sae";
mysqli_select_db($connexion, $db) or die("Erreur de sélection de la base de données");

// Requête pour récupérer le nombre de tickets
$sql = "SELECT COUNT(*) AS total_utilisateur FROM utilisateur WHERE perm = 0";
$result = mysqli_query($connexion, $sql) or die("Erreur de requête");

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $totalUtilisateur = $row["total_utilisateur"];


    echo " <div class='data' style='margin-left: 30px'> Le nombre total d utilisateur est : <br>" . $totalUtilisateur;
    echo "</div>";

} else {
    echo "Erreur lors de la récupération des données.";
}

// Fermer la connexion à la base de données
mysqli_close($connexion);
?>
