<?php
require 'connexion_bd.php';
//connexion à la base de données
$table = "ticket" ;
$connexionManager = new ConnexionBaseDeDonnees();
$connexion = $connexionManager->getConnection();
$tech = $_SESSION['login'];

$sql = "SELECT COUNT(*) AS total_tickets FROM ticket WHERE tech = $tech AND etat != 'fermer'";
$result = mysqli_query($connexion, $sql) or die("Erreur de requête");

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $totalTickets = $row["total_tickets"];


    echo "<div class='data' style='margin-left: 35px; margin-top: 180px;'>";
    echo "    Le nombre total de tickets est : <br>" . $totalTickets;
    echo "</div>";
} else {
    echo "Erreur lors de la récupération des données.";
}


mysqli_close($connexion);
?>