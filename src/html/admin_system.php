<?php
include '../php/restriction_2.php'
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <title>admin_system</title>
</head>
<body>
<div class="droite">
    <div class="haut">
        <a href="../php/decon.php" class="lien_bouton" id="deco">déconnexion</a>
        <div id="bouton_haut">
            <a href=""><img src="../png/logo.PNG" class="img_bouton"></a>
            <a href=""><img src="../png/logo.PNG" class="img_bouton"></a>
        </div>
        <h3 class="nom_page">admin system</h3>
        <div class="logo">
            <img class="logo_img" src="../png/logo.PNG">
        </div>
    </div>
</div>
<div class="petit_grand_parent">
    <div class="gauche">
        <div class="parent_bouton">
            <a href="" class="lien_bouton" style="background-color: #9c9ca1"> <img src="../png/logo.PNG" class="img_bouton"> <p>admin system</p></a>
            <a href="new_tech.php" class="lien_bouton" > <img src="../png/logo.PNG" class="img_bouton"> <p>nouveau tech</p></a>
        </div>
    </div>
    <div class="bas">
        <div class="stat flex_row_79">
            <div class="menu_déroulant" style="height: 650px;">
                <?php include '../php/tab_admin_system.php' ?>
            </div>
        </div>
        <div class="flex_row_19">
            <div class="stat stat_32 pour_form" >
                    <div class="titre" ><p>Nouveau libelle</p></div>
                    <form action="../php/nouveau_libelle.php" class="form" method="post" style="margin-top: 30px" >
                            <input id="libelle" name="libelle" class="input" type="text" placeholder=" " />
                        <button type="submit" class="confirmation" style="margin-top: 20px">confirmation</button>
                    </form>
            </div>
            <div class="stat stat_32 centre">
                <?php include '../php/tab_admin_stat_2.php' ?>
            </div>
            <div class="stat stat_32 centre">
                <?php include '../php/tab_admin_stat_3.php' ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>