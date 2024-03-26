<?php
include '../php/restriction.php';
include '../php/connexion_bd.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>utilisateur</title>
</head>
<body>
<div class="droite">
    <div class="haut">
        <a href="../php/decon.php" class="lien_bouton" id="deco">déconnexion</a>
        <div id="bouton_haut">
            <a href=""><img src="../png/logo.PNG" class="img_bouton"></a>
            <a href=""><img src="../png/logo.PNG" class="img_bouton"></a>
        </div>
        <h3 class="nom_page">Tableau de bord</h3>
        <div class="logo">
            <img class="logo_img" src="../png/logo.PNG">
        </div>
    </div>
</div>
<div class="grand_parent">
    <div class="gauche">
        <div class="parent_bouton">
            <a href="" class="lien_bouton" style="background-color: #9c9ca1"> <img src="../png/logo.PNG" class="img_bouton"> <p>Tableau de bord</p></a>
            <a href="changement_mdp.php" class="lien_bouton"><img src="../png/logo.PNG" class="img_bouton"> <p>Changement de mot de passe</p></a>
        </div>
    </div>
    <div class="bas">
        <div class="flex_row">
            <div class="stat stat_48 pour_form">
                <div class="titre"><p>Nouveau ticket</p></div>
                <form action="../php/nouveau_ticket.php" class="form" method="post" style="margin-top: 30px">
                    <div class="">
                        <label for="libelle" class="text_libelle">libellé</label>
                        <select name="libelle" id="libelle" class="input_div début" style="background-color: black ; color: white">
                            <?php
                            $connexion = new ConnexionBaseDeDonnees();
                            $connection = $connexion->getConnection();
                            $query = "SELECT texte FROM libelle";
                            $result = mysqli_query($connection, $query);
                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo '<option style="color : white" value="' . $row['texte'] . '">' . $row['texte'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="radio">
                        <p>Urgence</p>
                        <input type="radio" id="1" name="radio" value="1">
                        <label for="1"> 1</label>
                        <input type="radio" id="2" name="radio" value="2">
                        <label for="2"> 2</label>
                        <input type="radio" id="3" name="radio" value="3">
                        <label for="3"> 3</label>
                        <input type="radio" id="4" name="radio" value="4">
                        <label for="4"> 4</label>
                    </div>
                    <div class="input_div fin">
                        <input id="nom_du_con" name="nom_du_con" class="input" type="text" placeholder=" " />
                        <div class="cut cut_110"></div>
                        <label for="nom_du_con" class="ph">nom du concerné</label>
                    </div>
                    <button type="text" class="confirmation">confirmation</button>
                </form>
            </div>
            <div class="stat stat_49 colum">
                <div class="stat stat_49 colum">
                </div>
                <div class="stat stat_49 colum">
                </div>
            </div>
        </div>
        <div class="stat stat_49 centre">
            <div class="menu_déroulant" style="height: 550px;">
                <?php include '../php/tab_utilisateur.php'; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
