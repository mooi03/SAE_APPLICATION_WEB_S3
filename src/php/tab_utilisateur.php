<?php
//connexion à la base de données
$table = "ticket" ;
$connexionManager = new ConnexionBaseDeDonnees();
$connexion = $connexionManager->getConnection();
$login_session = $_SESSION['login'];
$requete = "SELECT id, urgence, demandeur, état FROM $table WHERE login = '$login_session'AND état != 'fermer'";
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
    <p id="popup_libelle"></p>
</div>
    <button onclick="fermerPopup()" class="confirmation_sans_marge" style="background-color: crimson ">Fermer</button>
</div>
<script type="text/javascript" src="../javascript/pour_tab.js"></script>';


mysqli_free_result($resultat);
}
mysqli_close($connexion);
?>