<?php
$host = "localhost";
$user = "root";
$password = "";
$connexion = mysqli_connect($host, $user, $password) or die ("erreur");
$db = "bd_sae";
$conectdb = mysqli_select_db($connexion, $db) or die ("erreur");
$table = "ticket" ;
$login_session = $_SESSION['login'];
$requete = "SELECT id, urgence, demandeur, état FROM $table WHERE login = '$login_session'";
$resultat = mysqli_query($connexion, $requete);

if ($resultat) {
echo '<table>
    <tr>
        <th>numéro du ticket</th>
        <th>niveau d"urgence</th>
        <th>demandeur</th>
        <th>état du ticket</th>
    </tr>';


    while ($row = mysqli_fetch_assoc($resultat)) {
    echo '
    <tr>
        <td><button class="num_ticket" value="' . $row['id'] . '">' . $row['id'] . '</button></td>
        <td>' . $row['urgence'] . '</td>
        <td>' . $row['demandeur'] . '</td>
        <td>' . $row['état'] . '</td>
    </tr>';
    }

    echo '</table>';
    echo '
<div id="popup" style="display: none">
    <div class="déroulant_popup">
    <p id="libelle"></p>
</div>
    <button onclick="fermerPopup()" class="confirmation_sans_marge">Fermer</button>
</div>
<script type="text/javascript" src="pour_tab.js"></script>';


mysqli_free_result($resultat);
} else {
echo "Erreur lors de la récupération des données : " . mysqli_error($connexion);
}

mysqli_close($connexion);
?>