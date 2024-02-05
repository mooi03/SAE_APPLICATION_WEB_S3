<?php
$host = "localhost";
$user = "root";
$password = "";
$connection = mysqli_connect($host, $user, $password) or die("erreur");
$db = "bd_sae";
$select_db = mysqli_select_db($connection, $db) or die("erreur");
$table = "utilisateur";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login = mysqli_real_escape_string($connection, $_POST['login']);
    $mdp = mysqli_real_escape_string($connection, $_POST['mdp']);

    $selection = "SELECT * FROM $table WHERE login='$login'";
    $resulta = mysqli_query($connection, $selection);

    if (mysqli_num_rows($resulta) > 0) {
        echo "Ce login est déjà utilisé. Veuillez en choisir un autre.";
    } else {
        $insert = "INSERT INTO $table (login, mdp, perm) VALUES ('$login', '$mdp', 3)";

        if (mysqli_query($connection, $insert)) {
            echo "Inscription réussie !";
        } else {
            echo "Erreur lors de l'inscription : " . mysqli_error($connection);
        }
    }
    mysqli_close($connection);
}
?>