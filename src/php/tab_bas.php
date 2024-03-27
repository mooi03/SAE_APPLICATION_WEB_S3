<?php
require_once 'export_csv_bd.php';
export_csv('ticket');
$csv_directory = '../ticket/';
$csv_files = glob($csv_directory . '*.csv');

echo "<table border='1'>";
echo "<tr>";
echo "<th>Nom du fichier</th>";
echo "<th>Date</th>";
echo "</tr>";


foreach ($csv_files as $csv_file) {
    $file_name = basename($csv_file);
    // Extraction des informations sur la table et la date du nom du fichier
    preg_match('/export_(.*?)_(\d{4}-\d{2}-\d{2})\.csv/', $file_name, $matches);
    $table_associée = $matches[1];
    $date_associée = $matches[2];


    echo "<tr>";
    echo "<td><a href='$csv_file' download>$file_name</a></td>";
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