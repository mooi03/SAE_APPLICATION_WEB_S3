<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$connexion = mysqli_connect($host, $user, $password) or die("erreur");
$db = "bd_sae";
$conectdb = mysqli_select_db($connexion, $db) or die("erreur");
$table = "ticket";
$tech = $_SESSION['login'];

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $ticketId = $_GET['id'];

    // Correction de la requête SQL
    $updateQuery = "UPDATE $table SET état = 'en cours de traitement', tech = ? WHERE id = ?";
    $stmt = mysqli_prepare($connexion, $updateQuery);

    if ($stmt) {
        // Liaison des paramètres
        mysqli_stmt_bind_param($stmt, "si", $tech, $ticketId);

        // Exécution de la requête
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            header('Location: techenicien.php');
            exit(); // Ajout d'une sortie après la redirection
        } else {
            echo "Erreur lors de la mise à jour : " . mysqli_error($connexion);
        }

        // Fermeture de la requête préparée
        mysqli_stmt_close($stmt);
    } else {
        echo "Erreur lors de la préparation de la requête : " . mysqli_error($connexion);
    }
}

mysqli_close($connexion);
?>