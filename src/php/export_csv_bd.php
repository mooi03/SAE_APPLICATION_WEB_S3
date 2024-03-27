<?php
include_once 'connexion_bd.php';

function export_csv($table){
    $connexionManage = new ConnexionBaseDeDonnees();
    $connexion = $connexionManage->getConnection();
    if (!$connexion) {
        die("La connexion à la base de données a échoué");
    }

    $csv_base_directory = '../csv/';
    $table_directory = $table;
    $csv_directory = $csv_base_directory . $table_directory . '/';


    $csv_directory = $csv_base_directory . $table . '/';
    if (!is_dir($csv_directory)) {
        // Création du répertoire CSV s'il n'existe pas
        if (!mkdir($csv_directory, 0755, true)) {
            die("Erreur lors de la création du répertoire CSV");
        }
    }

    // Chemin complet pour le fichier CSV
    $csv_nom = 'export_' . $table . '_' . date('Y-m-d') . '.csv';
    $csv_chemin = $csv_directory . $csv_nom;
    $sql = "SELECT * FROM $table";
    $resultat = mysqli_query($connexion, $sql);

    if ($resultat->num_rows > 0) {
        $csv_file = fopen($csv_chemin, 'w');
        $entetes = array();
        $attributs = mysqli_fetch_fields($resultat);
        foreach ($attributs as $attribut) {
            $entetes[] = $attribut->name;
        }
        fputcsv($csv_file, $entetes);

        while ($row = $resultat->fetch_assoc()) {
            fputcsv($csv_file, $row);
        }


        fclose($csv_file);
    } else {
        echo "Aucune donnée à exporter pour la table $table.";
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($connexion);
}

?>