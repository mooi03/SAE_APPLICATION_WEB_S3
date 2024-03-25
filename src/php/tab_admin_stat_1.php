<?php
//connexion à la base de données
$table = "ticket";
$connexionManager = new ConnexionBaseDeDonnees();
$connection = $connexionManager->getConnection();

// Requête pour récupérer le nombre de tickets
$sql = "SELECT COUNT(*) AS total_tickets FROM $table";
$result = mysqli_query($connection, $sql) or die("Erreur de requête");

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $totalTickets = $row["total_tickets"];


    echo " <div class='data' style='margin-left: 30px' > Le nombre total de tickets est : <br>" . $totalTickets;
    echo "</div>";

} else {
    echo "Erreur lors de la récupération des données.";
}

// Fermer la connexion à la base de données
mysqli_close($connection);
?>
