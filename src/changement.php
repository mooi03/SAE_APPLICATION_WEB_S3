<?php

include 'restriction.php';

//connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$cle_rc4 = "clesecrete";
$connection = mysqli_connect($host, $user, $password) or die ("erreur");
$db = "bd_sae";
$conectdb = mysqli_select_db($connection, $db) or die ("erreur");
$table = "utilisateur";

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
                echo "Mot de passe mis à jour avec succès.";
            } else {
                echo "Erreur lors de la mise à jour du mot de passe : " . mysqli_error($connection);
            }
        } else {
            echo "Le nouveau mot de passe et la confirmation ne correspondent pas.";
        }
    } else {
        echo "Ancien mot de passe incorrect.";
    }
}



function rc4($cle, $message, $chiffrement = true) {
    $S = range(0, 255);
    $j = 0;

    // KSA
    for ($i = 0; $i < 256; $i++) {
        $cle_binaire = ord($cle[$i % strlen($cle)]);
        $j = ($j + $S[$i] + $cle_binaire) % 256;
        list($S[$i], $S[$j]) = array($S[$j], $S[$i]);
    }
    $i = $j = 0;

    // PRGA
    $texterempli = [];
    $message_len = strlen($message);
    for ($k = 0; $k < $message_len; $k++) {
        $i = ($i + 1) % 256;
        $j = ($j + $S[$i]) % 256;
        list($S[$i], $S[$j]) = array($S[$j], $S[$i]);
        $k_temp = $S[($S[$i] + $S[$j]) % 256];

        // Filtrer pour obtenir des caractères ASCII
        $char = chr(ord($message[$k]) ^ $k_temp & 0x7F);

        // Ajouter ou retirer la séquence spécifique en fonction du mode
        if ($chiffrement) {
            $texterempli[] = $char;
        } else {
            // Retirer la séquence spécifique à la fin
            if ($char != 'sequence_specifique') {
                $texterempli[] = $char;
            }
        }
    }

    $resultat = implode("", $texterempli);
    return $resultat;
}

?>