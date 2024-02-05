<?php
include 'restriction.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>new_mdp</title>
</head>
<body>
<div class="droite">
    <div class="haut">
        <a href="decon.php" class="lien_bouton" id="deco">déconnexion</a>
        <div id="bouton_haut">
            <a href=""><img src="logo.PNG" class="img_bouton"></a>
            <a href=""><img src="logo.PNG" class="img_bouton"></a>
        </div>
        <h3 class="nom_page">Changement de mot de passe</h3>
        <div class="logo">
            <img class="logo_img" src="logo.PNG">
        </div>
    </div>
</div>
<div class="petit_grand_parent">
    <div class="gauche">
        <div class="parent_bouton">
            <a href="page_principale_utilisateur.php" class="lien_bouton"> <img src="logo.PNG" class="img_bouton"> <p>Tableau de bord</p></a>
            <a href="" class="lien_bouton" style="background-color: #9c9ca1"><img src="logo.PNG" class="img_bouton"> <p>Changement de mot de passe</p></a>
        </div>
    </div>
    <div class="bas centre">
        <div class="stat stat_100 pour_form mdp_uu">
            <div class="titre"><p>Nouveau mdp</p></div>
            <form action="" class="form">
                <div class="input_div début_mdp">
                    <input id="ancien_mdp" class="input" type="text" placeholder=" " />
                    <div class="cut cut_140"></div>
                    <label for="ancien_mdp" class="ph">ancien mot de passe</label>
                </div>
                <div class="input_div fin_mdp">
                    <input id="new_mdp" class="input" type="text" placeholder=" " />
                    <div class="cut cut_140"></div>
                    <label for="new_mdp" class="ph">nouveau mot de passe</label>
                </div>
                <div class="input_div fin_mdp">
                    <input id="conf" class="input" type="text" placeholder=" " />
                    <div class="cut cut_230"></div>
                    <label for="conf" class="ph">confirmation du nouveau mot de passe</label>
                </div>
                <button type="text" class="confirmation">confirmation</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>