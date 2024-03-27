<?php
require_once 'export_csv_bd.php';
$table = 'utilisateur';
export_csv($table);
$csv_directory = "../csv/$table/";
$csv_files = glob($csv_directory . '*.csv');
echo "<table border='1'>";
echo "<tr>";
echo "<th>Nom du fichier</th>";
echo "<th>Date</th>";
echo "</tr>";

foreach ($csv_files as $csv_file) {
    $nom_fichier = basename($csv_file);

    // Extraction des informations sur la table et la date du nom du fichier
    preg_match('/export_' . $table . '_(\d{4}-\d{2}-\d{2})\.csv/', $nom_fichier, $matches);
    $date_associée = $matches[1];

    echo "<tr>";
    echo "<td><a href='$csv_file' download>$nom_fichier</a></td>";
    echo "<td>$date_associée</td>";
    echo "</tr>";
}
echo "</table>";
echo '
    <div id="popup" style="display: none">
        <div class="déroulant_popup">
        <p id="libelle"></p>
    </div>
        <button onclick="fermerPopup()" class="confirmation_sans_marge" style="background-color: crimson ">Fermer</button>
    </div>
    <script type="text/javascript" src="../javascript/pour_tab.js"></script>';

?>