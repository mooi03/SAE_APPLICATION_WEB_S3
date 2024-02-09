<?php
//connexion à la base de données
$host = "localhost";
$user = "root";
$password = "tutu";
$connection = mysqli_connect($host, $user, $password) or die("erreur");
$db = "bd_sae";
$select_db = mysqli_select_db($connection, $db) or die("erreur");
$table = "utilisateur";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = mysqli_real_escape_string($connection, $_POST['login']);
    $mdp = mysqli_real_escape_string($connection, $_POST['mdp']);
    $conf = mysqli_real_escape_string($connection, $_POST['conf']);
    $mail = mysqli_real_escape_string($connection, $_POST['mail']);
    if ($conf == $mdp){
    $cle_rc4 = "clesecrete";
    $mdp_chiffre_rc4 = rc4($cle_rc4, $mdp);
    $selection = "SELECT * FROM $table WHERE login='$login'";
    $resultat = mysqli_query($connection, $selection);

    if (mysqli_num_rows($resultat) > 0) {
        echo "Ce login est déjà utilisé. Veuillez en choisir un autre.";
        header("Location: register.php");
    }
    else {
        $insertion = "INSERT INTO $table (login, mdp, mail) VALUES ('$login', '" . bin2hex($mdp_chiffre_rc4) . "', '$mail')";


        if (mysqli_query($connection, $insertion)) {
            echo "Inscription réussie !";
            header("Location: register.php");
        } else {
            echo "Erreur lors de l'inscription : " . mysqli_error($connection);
            header("Location: register.php");
        }
    }
    }else{
        print_r("mdp ert conf diff");
        header("Location: register.php");
    }
    mysqli_close($connection);
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