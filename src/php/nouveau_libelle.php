<?php
require 'connexion_bd.php';
//connexion à la base de données
$table = "libelle";
$connexionManager = new ConnexionBaseDeDonnees();
$connection = $connexionManager->getConnection();

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $libelle = mysqli_real_escape_string($connection, $_POST['libelle']);

    $compteur_requete = "SELECT max(id) as total FROM $table";
    $resultat_compteur = mysqli_query($connection, $compteur_requete);

    if ($resultat_compteur) {
        $row = mysqli_fetch_assoc($resultat_compteur);
        $nb = $row['total'] + 1;

        $insert = "INSERT INTO $table (id, texte) VALUES ('$nb', '$libelle')";

        if (mysqli_query($connection, $insert)) {
            echo "Inscription réussie !";
            header("Location: ../html/admin_system.php");
        } else {
            echo "Erreur lors de l'inscription : " . mysqli_error($connection);
            header("Location: ../html/admin_system.php");
        }
    } else {
        echo "Erreur lors de la récupération du nombre total de lignes : " . mysqli_error($connection);
        header("Location: ../html/admin_system.php");
    }

    mysqli_close($connection);
}
?>