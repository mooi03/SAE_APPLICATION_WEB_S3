<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup avec Formulaire</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        #popup{
            display: none;
            position: fixed;
            padding: 60px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>

<button onclick="afficherPopup()">Afficher la Popup</button>

<div id="popup" class="stat stat_48 pour_form">
    <form method="post" class="form">

    <label for="libelle">Libellé :</label>
    <input type="text" class="input" name="libelle" id="libelle">

    <button type="submit" class="confirmation_sans_marge">Soumettre</button>
    </form>

    <button onclick="fermerPopup()" class="confirmation">Fermer</button>
</div>
<script>
    function afficherPopup() {
        document.getElementById('popup').style.display = 'block';
    }

    function fermerPopup() {
        document.getElementById('popup').style.display = 'none';
    }
</script>

</body>
</html>
