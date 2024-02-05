<?php
include 'restriction_3.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>tech</title>
</head>
<body>
<div class="droite">
    <div class="haut">
        <a href="decon.php" class="lien_bouton" id="deco">déconnexion</a>
        <div id="bouton_haut">
            <a href=""><img src="logo.PNG" class="img_bouton"></a>
            <a href=""><img src="logo.PNG" class="img_bouton"></a>
        </div>
        <h3 class="nom_page">Technicien</h3>
        <div class="logo">
            <img class="logo_img" src="logo.PNG">
        </div>
    </div>
</div>
<div class="petit_grand_parent">
    <div class="gauche">
        <div class="parent_bouton">
            <a href="" class="lien_bouton" style="background-color: #9c9ca1"> <img src="logo.PNG" class="img_bouton"> <p>Technicien</p></a>
        </div>
    </div>
    <div class="bas">
        <div class="flex_row">
            <div class="stat stat_65">
                <div class="menu_déroulant" style="height: 400px;">
                    <?php include 'tab_techenicien_haut.php'?>
                </div>
            </div>
            <div class="stat stat_32">
            </div>
        </div>
        <div class="stat stat_48">
            <div class="menu_déroulant" style=" height: 400px;">
                <?php include 'tab_techenicien_bas.php'?>
            </div>
        </div>
    </div>
</div>
</body>
</html>