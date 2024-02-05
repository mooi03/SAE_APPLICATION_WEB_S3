<?php
$host = "localhost";
$user = "root";
$password = "";
$connexion = mysqli_connect($host, $user, $password) or die ("erreur");
$db = "bd_sae";
$conectdb = mysqli_select_db($connexion, $db) or die ("erreur");
$table = "ticket" ;
$requete = "SELECT id, login, urgence, demandeur, état, tech FROM $table WHERE état != 'fermer' ORDER BY id DESC LIMIT 10";
$resultat = mysqli_query($connexion, $requete);

if ($resultat) {
    echo '<table>
    <tr class="tr_haut">
        <th>numéro du ticket</th>
        <th>utilisateur a l"origine</th>
        <th>niveau d"urgence</th>
        <th>demandeur</th>
        <th>état du ticket</th>
        <th>techenicien en charge du ticket</th>
    </tr>';


    while ($row = mysqli_fetch_assoc($resultat)) {
        echo '
    <tr>
        <td>' . $row['id'] . '</td>
        <td>' . $row['login'] . '</td>
        <td>' . $row['urgence'] . '</td>
        <td>' . $row['demandeur'] . '</td>
        <td>' . $row['état'] . '</td>
        <td>' . $row['tech'] . '</td>
    </tr>';
    }

    echo '</table>';
    echo '
<div id="popup" style="display: none">
    <div class="déroulant_popup">
    <p id="libelle"></p>
</div>
    <button onclick="fermerPopup()" class="confirmation_sans_marge" style="background-color: crimson ">Fermer</button>
</div>';


    mysqli_free_result($resultat);
}
mysqli_close($connexion);
?>