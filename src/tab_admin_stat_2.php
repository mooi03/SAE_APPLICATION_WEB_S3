<?php
$host = "localhost";
$user = "root";
$password = "tutu";
$connexion = mysqli_connect($host, $user, $password) or die("Erreur de connexion");

$db = "bd_sae";
mysqli_select_db($connexion, $db) or die("Erreur de sélection de la base de données");

// Requête pour récupérer le nombre de techniciens
$sqlTechniciens = "SELECT COUNT(*) AS total_techniciens FROM utilisateur WHERE perm = 3";
$resultTechniciens = mysqli_query($connexion, $sqlTechniciens) or die("Erreur de requête pour les techniciens");

if ($resultTechniciens) {
    $rowTechniciens = mysqli_fetch_assoc($resultTechniciens);
    $totalTechniciens = $rowTechniciens["total_techniciens"];

    echo "<div class='data' style='margin-left: 30px' >Le nombre total de techniciens est : <br>" . $totalTechniciens . "</div>";
} else {
    echo "Erreur lors de la récupération des données.";
}

// Fermer la connexion à la base de données
mysqli_close($connexion);
?>
