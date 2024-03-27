<?php
require 'connexion_bd.php';
//connexion à la base de données
$table = "ticket" ;
$connexionManager = new ConnexionBaseDeDonnees();
$connection = $connexionManager->getConnection();
$login_session = $_SESSION['login'];
$requete = "SELECT id,login, urgence, salle, etat, tech, ip FROM  $table WHERE etat != 'fermer' AND tech = '$login_session'";
$resultat = mysqli_query($connection, $requete);

if ($resultat) {
    echo '<table>
    <tr>
        <th>numéro du ticket</th>
        <th>créateur du ticket</th>
        <th>niveau d\'urgence</th>
        <th>salle</th>
        <th>état du ticket</th>
        <th>adresse ip</th>
        <th>fermer le ticket</th>
    </tr>';


    while ($row = mysqli_fetch_assoc($resultat)) {
        echo '
    <tr>
        <td><button class="num_ticket" value="' . $row['id'] . '">' . $row['id'] . '</button></td>
        <td>' . $row['login'] . '</td>
        <td>' . $row['urgence'] . '</td>
        <td>' . $row['salle'] . '</td>
        <td>' . $row['etat'] . '</td>
        <td>' . $row['ip'] . '</td>
        <td><a href="../php/fermeture.php?id=' . $row['id'] . '"><img src="../png/croix.png" style="height: 40px; width: 40px "></a></td>
    </tr>';
    }

    echo '</table>';
    echo '
<div id="popup" style="display: none; height: 450px">
<form method="post" class="form" action="">
<div class="input_div début" style="margin-bottom: 30px; height: 200px">
    <textarea class="input" name="libelle" id="libelle"> </textarea>
    <button type="submit" class="confirmation_sans_marge">modifier</button>
    </div>
    </form>
    <button onclick="fermerPopup()" class="confirmation_sans_marge" style="background-color: crimson ">Fermer</button>
</div>
<script type="text/javascript" src="../javascript/pour_tab_modification.js"></script>';


    mysqli_free_result($resultat);
}

mysqli_close($connection);
?>