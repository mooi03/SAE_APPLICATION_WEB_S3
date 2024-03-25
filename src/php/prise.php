<?php
session_start();
require 'connexion_bd.php';
//connexion à la base de données
$table = "ticket";
$connexionManager = new ConnexionBaseDeDonnees();
$connection = $connexionManager->getConnection();
$tech = $_SESSION['login'];

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $ticketId = $_GET['id'];

    // Correction de la requête SQL
    $updateQuery = "UPDATE $table SET état = 'en cours de traitement', tech = ? WHERE id = ?";
    $stmt = mysqli_prepare($connection, $updateQuery);

    if ($stmt) {
        // Liaison des paramètres
        mysqli_stmt_bind_param($stmt, "si", $tech, $ticketId);

        // Exécution de la requête
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            header('Location: ../html/techenicien.php');
            exit(); // Ajout d'une sortie après la redirection
        } else {
            echo "Erreur lors de la mise à jour : " . mysqli_error($connection);
        }

        // Fermeture de la requête préparée
        mysqli_stmt_close($stmt);
    } else {
        echo "Erreur lors de la préparation de la requête : " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>