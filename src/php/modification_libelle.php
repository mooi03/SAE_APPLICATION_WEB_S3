<?php
$host = "localhost";
$user = "root";
$password = "tutu";
$connexion = mysqli_connect($host, $user, $password) or die("erreur");
$db = "bd_sae";
$conectdb = mysqli_select_db($connexion, $db) or die("erreur");
$table = "ticket";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ticketId = $_POST['id'];
    $libelle = $_POST['libelle'];

    $updateQuery = "UPDATE $table SET libellé = '$libelle' WHERE id = $ticketId";
    mysqli_query($connexion, $updateQuery);
}

mysqli_close($connexion);
?>