<?php
require 'connexion_bd.php';
//connexion à la base de données
$table = "ticket" ;
$connexionManager = new ConnexionBaseDeDonnees();
$connexion = $connexionManager->getConnection();
$login_session = $_SESSION['login'];
$requete = "SELECT id,login, urgence, demandeur, état,tech, date, ip FROM  $table WHERE état != 'fermer'";
$resultat = mysqli_query($connexion, $requete);

if ($resultat) {
    echo '<table>
    <tr>
        <th>numéro du ticket</th>
        <th>créateur du ticket</th>
        <th>niveau d"urgence</th>
        <th>demandeur</th>
        <th>état du ticket</th>
        <th>techenicien en charge</th>
        <th>date de création</th>
        <th>adresse ip</th>
    </tr>';


    while ($row = mysqli_fetch_assoc($resultat)) {
        echo '
    <tr>
        <td><button class="num_ticket" value="' . $row['id'] . '">' . $row['id'] . '</button></td>
        <td>' . $row['login'] . '</td>
        <td>' . $row['urgence'] . '</td>
        <td>' . $row['demandeur'] . '</td>
        <td>' . $row['état'] . '</td>
        <td>' . $row['tech'] . '</td>
        <td>' . $row['date'] . '</td>
        <td>' . $row['ip'] . '</td>
    </tr>';
    }

    echo '</table>';
    echo '
<div id="popup" style="display: none">
    <div class="déroulant_popup">
    <p id="libelle"></p>
</div>
    <button onclick="fermerPopup()" class="confirmation_sans_marge" style="background-color: crimson ">Fermer</button>
</div>
<script type="text/javascript" src="../javascript/pour_tab.js"></script>';


    mysqli_free_result($resultat);
}
mysqli_close($connexion);
?>