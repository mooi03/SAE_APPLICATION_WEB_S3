<?php
$host = "localhost";
$user = "root";
$password = "";
$connection = mysqli_connect($host, $user, $password) or die ("erreur");
$db = "bd_sae";
$conectdb = mysqli_select_db($connection, $db) or die ("erreur");
$table = "utilisateur" ;
$cle_rc4 = "clesecrete";
$requete = "Select * from $table" ;
$resultat = mysqli_query($connection,$requete) ;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // récuperation des données entrés dans le formulaire
    $login = mysqli_real_escape_string($connection, $_POST['login']);
    $mdp_base_donnee = mysqli_real_escape_string($connection, $_POST['mdp']);
    $mdp_query = "SELECT mdp FROM $table WHERE login='$login'";
    $resultat_mdp = mysqli_query($connection, $mdp_query);
    $ligne_mdp = mysqli_fetch_assoc($resultat_mdp);
    $mdp1 = rc4($cle_rc4, $mdp_base_donnee);

}
if(isset($_POST['login'],$_POST['mdp'])) {
    $login = $_POST['login'];
    foreach ($_POST as $k => $v){
        $$k = $v ;
    }
    while ($ligne=mysqli_fetch_row($resultat)){
        if ($ligne[0] == $login && (bin2hex($mdp1) == $ligne_mdp['mdp'])){
            if ($ligne[2] == 0) {
                header("Location: page_principale_utilisateur.php");
                session_start();
                $_SESSION['login'] = $login;
                $_SESSION['perm'] = 0;
                exit(0);
            }
            elseif ($ligne[2] == 1){
                header("Location: admin_res.php");
                session_start();
                $_SESSION['login'] = $login;
                $_SESSION['perm'] = 1;
                exit(0);
            }
            elseif ($ligne[2] == 2){
                header("Location: admin_system.php");
                session_start();
                $_SESSION['login'] = $login;
                $_SESSION['perm'] = 2;
                exit(0);
            }
            elseif ($ligne[2] == 3){
                header("Location: techenicien.php");
                session_start();
                $_SESSION['login'] = $login;
                $_SESSION['perm'] = 3;
                exit(0);
            }
        }
    }
    $ip = $_SERVER['REMOTE_ADDR'] ;
    $date = date('d-m-y h:i:s') ;
    $mdp_query = "INSERT INTO erreur_co (mdp,login,ip,date) VALUES ('$mdp_base_donnee','$login','$ip','$date')";
    $resultat_mdp = mysqli_query($connection, $mdp_query);
    header( "Location: connexion.php");
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


        $char = chr(ord($message[$k]) ^ $k_temp & 0x7F);


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