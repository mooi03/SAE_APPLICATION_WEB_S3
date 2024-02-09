<?php
require 'connexion_bd.php';
//connexion à la base de données
$table = "erreur_co" ;
$connexionManager = new ConnexionBaseDeDonnees();
$connection = $connexionManager->getConnection();
$login_session = $_SESSION['login'];
$requete = "SELECT mdp,login,date,ip FROM $table";
$resultat = mysqli_query($connection, $requete);

if ($resultat) {
    echo '<table>
    <tr>
        <th>login</th>
        <th>mdp</th>
        <th>date de la connection</th>
        <th>adresse ip</th>
    </tr>';


    while ($row = mysqli_fetch_assoc($resultat)) {
        echo '
    <tr>
        <td>' . $row['login'] . '</td>
        <td>' . $row['mdp'] . '</td>
        <td>' . $row['date'] . '</td>
        <td>' . $row['ip'] . '</td>
    </tr>';
    }

    echo '</table>';


    mysqli_free_result($resultat);
}
mysqli_close($connection);
?>