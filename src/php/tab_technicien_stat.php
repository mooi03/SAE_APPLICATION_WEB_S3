<?php
$host = "localhost";
$user = "root";
$password = "tutu";
$connexion = mysqli_connect($host, $user, $password) or die("Erreur de connexion");
$tech = $_SESSION['login'];
$db = "bd_sae";
mysqli_select_db($connexion, $db) or die("Erreur de sélection de la base de données");


$sql = "SELECT COUNT(*) AS total_tickets FROM ticket WHERE tech = $tech AND état != 'fermer'";
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
