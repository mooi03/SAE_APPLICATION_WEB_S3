<?php
//connexion à la base de données
$table = "utilisateur";
$connexionManager = new ConnexionBaseDeDonnees();
$connection = $connexionManager->getConnection();

// Requête pour récupérer le nombre de tickets
$sql = "SELECT COUNT(*) AS total_utilisateur FROM $table WHERE perm = 0";
$result = mysqli_query($connection, $sql) or die("Erreur de requête");

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $totalUtilisateur = $row["total_utilisateur"];


    echo " <div class='data' style='margin-left: 30px'> Le nombre total d utilisateur est : <br>" . $totalUtilisateur;
    echo "</div>";

} else {
    echo "Erreur lors de la récupération des données.";
}

// Fermer la connexion à la base de données
mysqli_close($connection);
?>