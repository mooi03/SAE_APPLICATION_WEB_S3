<?php
include 'restriction.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>utilisateur</title>
</head>
<body>
<div class="droite">
    <div class="haut">
        <a href="decon.php" class="lien_bouton" id="deco">déconnexion</a>
        <div id="bouton_haut">
            <a href=""><img src="logo.PNG" class="img_bouton"></a>
            <a href=""><img src="logo.PNG" class="img_bouton"></a>
        </div>
        <h3 class="nom_page">Tableau de bord</h3>
        <div class="logo">
        <img class="logo_img" src="logo.PNG">
        </div>
    </div>
</div>
    <div class="grand_parent">
        <div class="gauche">
            <div class="parent_bouton">
            <a href="" class="lien_bouton" style="background-color: #9c9ca1"> <img src="logo.PNG" class="img_bouton"> <p>Tableau de bord</p></a>
            <a href="changement_mdp.php" class="lien_bouton"><img src="logo.PNG" class="img_bouton"> <p>Changement de mot de passe</p></a>
            </div>
        </div>
        <div class="bas">
            <div class="flex_row">
                <div class="stat stat_48 pour_form">
                    <div class="titre"><p>Nouveau ticket</p></div>
                    <form action="nouveau_ticket.php" class="form" method="post">
                        <div class="input_div début">
                            <input id="libellé" name="libellé" class="input" type="text" placeholder=" " />
                            <div class="cut cut_50"></div>
                            <label for="libellé" class="ph">libellé</label>
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
                        <div class="menu_déroulant">
                        </div>
                    </div>
                    <div class="stat stat_49 colum">
                        <div class="menu_déroulant">
                        </div>
                    </div>
                </div>
            </div>
            <div class="stat stat_49">
                <div class="menu_déroulant">
            </div>
            </div>
        </div>
        </div>
</body>
</html>