<?php
//connexion à la base de données
$table = "ticket" ;
$connexionManager = new ConnexionBaseDeDonnees();
$connexion = $connexionManager->getConnection();
$login_session = $_SESSION['login'];
$requete = "SELECT id,login, urgence, salle, état,tech FROM  $table WHERE état = 'ouvert'";
$resultat = mysqli_query($connexion, $requete);

if ($resultat) {
    echo '<table>
    <tr>
        <th>numéro du ticket</th>
        <th>créateur du ticket</th>
        <th>niveau d\'urgence</th>
        <th>salle</th>
        <th>état du ticket</th>
        <th>techenicien</th>
        <th>prendre en charge le ticket</th>
    </tr>';


    while ($row = mysqli_fetch_assoc($resultat)) {
        echo '
    <tr>
        <td><button class="num_ticket" value="' . $row['id'] . '">' . $row['id'] . '</button></td>
        <td>' . $row['login'] . '</td>
        <td>' . $row['urgence'] . '</td>
        <td>' . $row['salle'] . '</td>
        <td>' . $row['état'] . '</td>
        <td>' . $row['tech'] . '</td>
        <td><a href="../php/prise.php?id=' . $row['id'] . '"><img src="../png/plus.png" style="height: 40px; width: 40px "></a></td>
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