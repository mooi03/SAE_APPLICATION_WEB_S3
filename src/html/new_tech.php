<?php
include 'restriction_2.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css">
  <title>new_tech</title>
</head>
<body>
<div class="droite">
  <div class="haut">
    <a href="../php/decon.php" class="lien_bouton" id="deco">déconnexion</a>
    <div id="bouton_haut">
      <a href=""><img src="../png/logo.PNG" class="img_bouton"></a>
      <a href=""><img src="../png/logo.PNG" class="img_bouton"></a>
    </div>
    <h3 class="nom_page">Nouveau techenicien</h3>
    <div class="logo">
      <img class="logo_img" src="../png/logo.PNG">
    </div>
  </div>
</div>
<div class="petit_grand_parent">
  <div class="gauche">
    <div class="parent_bouton">
      <a href="admin_system.php" class="lien_bouton"> <img src="../png/logo.PNG" class="img_bouton"> <p>admin system</p></a>
      <a href="" class="lien_bouton" style="background-color: #9c9ca1"> <img src="../png/logo.PNG" class="img_bouton"> <p>nouveau tech</p></a>
    </div>
  </div>
  <div class="bas centre">
    <div class="stat stat_100 pour_form mdp_uu">
      <div class="titre"><p>Nouveau techenicien</p></div>
      <form action="../php/enregistrement_tech.php" class="form" method="post">
        <div class="input_div début_mdp">
          <input id="login" name="login" class="input" type="text" placeholder=" " />
          <div class="cut cut_140"></div>
          <label for="login" class="ph">Nom tech</label>
        </div>
        <div class="input_div fin_mdp">
          <input id="mdp" name="mdp" class="input" type="text" placeholder=" " />
          <div class="cut cut_140"></div>
          <label for="mdp" class="ph">mot de passe</label>
        </div>
        <div class="input_div fin_mdp">
          <input id="conf" name="conf" class="input" type="text" placeholder=" " />
          <div class="cut cut_230"></div>
          <label for="conf" class="ph">confirmation du nouveau mot de passe</label>
        </div>
        <button type="submit" class="confirmation">confirmation</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>