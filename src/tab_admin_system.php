<?php
$host = "localhost";
$user = "root";
$password = "";
$connexion = mysqli_connect($host, $user, $password) or die ("erreur");
$db = "bd_sae";
$conectdb = mysqli_select_db($connexion, $db) or die ("erreur");
$table = "ticket" ;
$login_session = $_SESSION['login'];
$requete = "SELECT id,login, urgence, demandeur, état,tech FROM $table WHERE état !='fermer'";
$resultat = mysqli_query($connexion, $requete);

if ($resultat) {
    echo '<table>
    <tr>
        <th>numéro du ticket</th>
        <th>créateur du ticket</th>
        <th>niveau d"urgence</th>
        <th>demandeur</th>
        <th>état du ticket</th>
        <th>techenicien</th>
        <th>fermer le ticket</th>
    </tr>';


    while ($row = mysqli_fetch_assoc($resultat)) {
        echo '
    <tr>
        <td><button class="num_ticket" value="' . $row['id'] . '">' . $row['id'] . '</button></td>
        <td>' . $row['login'] . '</td>
        <td><button class="urgence" value="' . $row['id'] . '">' . $row['urgence'] . '</button></td>
        <td>' . $row['demandeur'] . '</td>
        <td>' . $row['état'] . '</td>
        <td><button class="tech" value="' . $row['id'] . '">' . $row['tech'] . '</button></td>
        <td><a href="fermeture.php?id=' . $row['id'] . '"><img src="croix.png" style="height: 40px; width: 40px "></a></td>
    </tr>';
    }

    echo '</table>';
    echo '
<div id="popup" style="display: none">
<form method="post" class="form" action="">
<div class="input_div début" style="margin-bottom: 30px; height: 200px">
    <textarea class="input" name="libelle" id="libelle"> </textarea>
    <button type="submit" class="confirmation_sans_marge">modifier</button>
    </div>
    </form>
    <button onclick="fermerPopup()" class="confirmation_sans_marge" style="background-color: crimson ">Fermer</button>
</div>
<div id="popup_urgence" style="display: none">
<form method="post" class="form form_urgence" action="">
<div class="radio" style="height: 200px; margin-bottom: 0px">
    <input type="radio" id="1" name="radio" value="1"style="margin-left: 40px">
    <label for="1"> 1</label>
    <input type="radio" id="2" name="radio" value="2">
    <label for="2"> 2</label>
    <input type="radio" id="3" name="radio" value="3">
    <label for="3"> 3</label>
    <input type="radio" id="4" name="radio" value="4">
    <label for="4"> 4</label>
    <button type="submit" class="confirmation_sans_marge" style="margin-top: 30px; margin-left: 28%">modifier</button>
    </div>
    </form>
    <button onclick="fermerPopup()" class="confirmation_sans_marge" style="background-color: crimson ">Fermer</button>
</div>
<div id="popup_tech" style="display: none">
    <form method="post" class="form form_tech">
        <select name="technicien" id="technicien_select">
        <option value="aucun">aucun</option>';
    $requete_tech = "SELECT login FROM utilisateur WHERE perm = 3";
    $resultat_tech = mysqli_query($connexion, $requete_tech);
    if ($resultat_tech) {
        while ($row_tech = mysqli_fetch_assoc($resultat_tech)) {
            echo '<option value="' . $row_tech['login'] . '">' . $row_tech['login'] . '</option>';
        }
        mysqli_free_result($resultat_tech);
    }
        echo '</select>
        <button type="submit" class="confirmation_sans_marge" style="margin-top: 20px">Valider</button>
    </form>
    <button onclick="fermerPopup()" class="confirmation_sans_marge" style="background-color: crimson ">Fermer</button>
</div>
<script type="text/javascript" src="pour_tab_modification.js"></script>
<script type="text/javascript" src="pour_tab_modification_tech.js"></script>';


    mysqli_free_result($resultat);
}

mysqli_close($connexion);
?>