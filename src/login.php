<?php
$host = "localhost";
$user = "root";
$password = "";
$connection = mysqli_connect($host, $user, $password) or die ("erreur");
$db = "bd_sae";
$conectdb = mysqli_select_db($connection, $db) or die ("erreur");
$table = "utilisateur" ;
$requete = "Select * from $table" ;
$resultat = mysqli_query($connection,$requete) ;
if(isset($_POST['login'],$_POST['mdp'])) {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    foreach ($_POST as $k => $v){
        $$k = $v ;
    }
    while ($ligne=mysqli_fetch_row($resultat)){
        print_r($ligne[0]) ;
        print_r($ligne[1]) ;
        if ($ligne[0] == $login && $ligne[1] == $mdp){
            if ($ligne[2] == 0) {
                header('Location: page_principale_utilisateur.php');
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
    header( "Location: connexion.php");
}