<?php
//connexion à la base de données
$table = "utilisateur";
$connexionManager = new ConnexionBaseDeDonnees();
$connection = $connexionManager->getConnection();

// Requête pour récupérer le nombre de techniciens
$sqlTechniciens = "SELECT COUNT(*) AS total_techniciens FROM $table WHERE perm = 3";
$resultTechniciens = mysqli_query($connection, $sqlTechniciens) or die("Erreur de requête pour les techniciens");

if ($resultTechniciens) {
    $rowTechniciens = mysqli_fetch_assoc($resultTechniciens);
    $totalTechniciens = $rowTechniciens["total_techniciens"];

    echo "<div class='data' style='margin-left: 30px' >Le nombre total de techniciens est : <br>" . $totalTechniciens . "</div>";
} else {
    echo "Erreur lors de la récupération des données.";
}

// Fermer la connexion à la base de données
mysqli_close($connection);
?>
