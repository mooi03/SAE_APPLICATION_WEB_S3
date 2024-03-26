<?php
//connexion à la base de données
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
    if ($conf == $mdp){
        $cle_rc4 = "clesecrete";
        $mdp_chiffre_rc4 = rc4($cle_rc4, $mdp);
        $selection = "SELECT * FROM $table WHERE login='$login'";
        $resultat = mysqli_query($connection, $selection);

        if (mysqli_num_rows($resultat) > 0) {
            echo "Ce login est déjà utilisé. Veuillez en choisir un autre.";
            header("Location: ../html/new_tech.php");
        }
        else {
            $insertion = "INSERT INTO $table (login, mdp, perm ) VALUES ('$login', '" . bin2hex($mdp_chiffre_rc4) . "', 3)";


            if (mysqli_query($connection, $insertion)) {
                echo "Inscription réussie !";
                header("Location: ../html/new_tech.php");
            } else {
                echo "Erreur lors de l'inscription : " . mysqli_error($connection);
                header("Location: ../html/new_tech.php");
            }
        }
    }else{
        print_r("mdp ert conf diff");
        header("Location: ../html/new_tech.php");
    }
    mysqli_close($connection);
}

?>