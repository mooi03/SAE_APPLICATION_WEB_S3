<?php
include 'restriction_1.php'
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>admin_res</title>
</head>
<body>
<div class="droite">
    <div class="haut">
        <a href="../php/decon.php" class="lien_bouton" id="deco">déconnexion</a>
        <div id="bouton_haut">
            <a href=""><img src="../png/logo.PNG" class="img_bouton"></a>
            <a href=""><img src="../png/logo.PNG" class="img_bouton"></a>
        </div>
        <h3 class="nom_page">admin réseau</h3>
        <div class="logo">
            <img class="logo_img" src="../png/logo.PNG">
        </div>
    </div>
</div>
<div class="petit_grand_parent">
    <div class="gauche">
        <div class="parent_bouton">
            <a href="" class="lien_bouton" style="background-color: #9c9ca1"> <img src="../png/logo.PNG" class="img_bouton"> <p>admin réseau</p></a>
        </div>
    </div>
    <div class="bas">
        <div class="flex_row_65">
            <div class="stat stat_49">
                <div class="menu_déroulant" style="height: 500px">
                    <?php include 'tab_haut_droit.php' ?>
                </div>
            </div>
            <div class="stat stat_49">
                <div class="menu_déroulant" style="height: 500px">
                    <?php include 'tab_haut_gauche.php' ?>
                </div>
            </div>
        </div>
        <div class="stat stat_32">
            <div class="menu_déroulant" style="height: 250px">
                <?php include 'tab_bas.php' ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>