<?php
//connexion à la base de données
session_start();
require 'connexion_bd.php';
require_once 'crypto/rc4.php';
$cle_rc4 = "clesecrete";
//connexion à la base de données
$table = "utilisateur";
$connexionManager = new ConnexionBaseDeDonnees();
$connection = $connexionManager->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = mysqli_real_escape_string($connection, $_POST['login']);
    $mdp = mysqli_real_escape_string($connection, $_POST['mdp']);
    $conf = mysqli_real_escape_string($connection, $_POST['conf']);

    if ($conf == $mdp) {
        $mdp_chiffre_rc4 = rc4($cle_rc4, $mdp);
        $selection = "SELECT * FROM $table WHERE login='$login'";
        $resultat = mysqli_query($connection, $selection);

        if (mysqli_num_rows($resultat) > 0) {
            $_SESSION['error_message'] = "Ce login est déjà utilisé. Veuillez en choisir un autre.";
        } else {
            $insertion = "INSERT INTO $table (login, mdp, perm ) VALUES ('$login', '" . bin2hex($mdp_chiffre_rc4) . "', 3)";

            if (mysqli_query($connection, $insertion)) {
                $_SESSION['success_message'] = "Inscription réussie !";
            } else {
                $_SESSION['error_message'] = "Erreur lors de l'inscription";
            }
        }
    } else {
        $_SESSION['error_message'] = "Les mots de passe ne correspondent pas.";
    }
    mysqli_close($connection);
}

header("Location: ../html/new_tech.php");
?>