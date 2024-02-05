<?php
$host = "localhost";
$user = "root";
$password = "";
$connexion = mysqli_connect($host, $user, $password) or die ("erreur");
$db = "bd_sae";
$conectdb = mysqli_select_db($connexion, $db) or die ("erreur");
$table = "erreur_co" ;
$login_session = $_SESSION['login'];
$requete = "SELECT mdp,login,date,ip FROM $table";
$resultat = mysqli_query($connexion, $requete);

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
mysqli_close($connexion);
?>