<?php
$host = "localhost";
$user = "root";
$password = "";
$connection = mysqli_connect($host, $user, $password) or die("erreur");
$db = "bd_sae";
$select_db = mysqli_select_db($connection, $db) or die("erreur");
$table = "ticket";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $libelle = mysqli_real_escape_string($connection, $_POST['libellé']); // Modifié la variable pour éviter les caractères spéciaux
    $radio = mysqli_real_escape_string($connection, $_POST['radio']);
    $demandeur = mysqli_real_escape_string($connection, $_POST['nom_du_con']);

    $compteur_requete = "SELECT COUNT(*) as total FROM $table"; // Utiliser le nom de la table en variable
    $resultat_compteur = mysqli_query($connection, $compteur_requete);

    if ($resultat_compteur) {
        $row = mysqli_fetch_assoc($resultat_compteur);
        $nb = $row['total'] + 1; // Utiliser le résultat du compteur pour obtenir le nouvel identifiant

        $login = $_SESSION['login'];

        $insert = "INSERT INTO $table (id, login, libellé, urgence, demandeur) VALUES ('$nb', '$login', '$libelle', '$radio', '$demandeur')";

        if (mysqli_query($connection, $insert)) {
            echo "Inscription réussie !";
        } else {
            echo "Erreur lors de l'inscription : " . mysqli_error($connection);
        }
    } else {
        echo "Erreur lors de la récupération du nombre total de lignes : " . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>