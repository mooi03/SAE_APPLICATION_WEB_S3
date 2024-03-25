<?php
include 'restriction.php';
require 'connexion_bd.php';
require_once 'crypto/rc4.php';
$cle_rc4 = "clesecrete";
//connexion à la base de données
$table = "utilisateur";
$connexionManager = new ConnexionBaseDeDonnees();
$connection = $connexionManager->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // récuperation des données du formulaire
    $ancien_mdp = mysqli_real_escape_string($connection, $_POST['ancien_mdp']);
    $new_mdp = mysqli_real_escape_string($connection, $_POST['new_mdp']);
    $conf = mysqli_real_escape_string($connection, $_POST['conf']);
    $login = $_SESSION['login'];

    //dechiffrement de l'ancien mot de passe
    $ancien_mdp_db = rc4($cle_rc4, $ancien_mdp);
    $ancien_mdp_db_bon = bin2hex($ancien_mdp_db);
    $verification_mdp_query = "SELECT * FROM utilisateur WHERE login='$login' AND mdp='$ancien_mdp_db_bon'";
    $resultat_verification_mdp = mysqli_query($connection, $verification_mdp_query);

    if ($resultat_verification_mdp && mysqli_num_rows($resultat_verification_mdp) == 1) {
        // mise à jour du nouveau mot de passes
        if (strcasecmp(trim($new_mdp), trim($conf)) == 0) {
            // Nouveau mot de passe et confirmation de ce dernier
            $new_mdp_rc4 = rc4($cle_rc4, $new_mdp);
            $update_mdp_query = "UPDATE utilisateur SET mdp='" . bin2hex($new_mdp_rc4) . "' WHERE login='$login'";

            if (mysqli_query($connection, $update_mdp_query)) {
                header('Location: ../html/changement_mdp.php');
            } else {
                header('Location: ../html/changement_mdp.php');
            }
        } else {
            header('Location: ../html/changement_mdp.php');
        }
    } else {
        header('Location: ../html/changement_mdp.php');
    }
}





?>