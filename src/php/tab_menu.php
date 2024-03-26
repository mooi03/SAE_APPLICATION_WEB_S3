<?php
require 'connexion_bd.php';
//connexion à la base de données
$table = "ticket" ;
$connexionManager = new ConnexionBaseDeDonnees();
$connexion = $connexionManager->getConnection();
$requete = "SELECT id, login, urgence, salle, état, tech FROM $table WHERE état != 'fermer' ORDER BY id DESC LIMIT 10";
$resultat = mysqli_query($connexion, $requete);

if ($resultat) {
    echo '<table>
    <tr class="tr_haut">
        <th>numéro du ticket</th>
        <th>utilisateur a l"origine</th>
        <th>niveau d"urgence</th>
        <th>salle</th>
        <th>état du ticket</th>
        <th>techenicien en charge du ticket</th>
    </tr>';


    while ($row = mysqli_fetch_assoc($resultat)) {
        echo '
    <tr>
        <td>' . $row['id'] . '</td>
        <td>' . $row['login'] . '</td>
        <td>' . $row['urgence'] . '</td>
        <td>' . $row['salle'] . '</td>
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