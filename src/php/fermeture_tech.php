<?php
$host = "localhost";
$user = "root";
$password = "tutu";
$connexion = mysqli_connect($host, $user, $password) or die("erreur");
$db = "bd_sae";
$conectdb = mysqli_select_db($connexion, $db) or die("erreur");
$table = "ticket";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $ticketId = $_GET['id'];
    $updateQuery = "UPDATE $table SET état = 'fermer' WHERE id = ?";
    $stmt = mysqli_prepare($connexion, $updateQuery);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $ticketId);
        $result = mysqli_stmt_execute($stmt);
        if ($result) {
            header('Location: techenicien.php');;
        }
        mysqli_stmt_close($stmt);
    }
}
mysqli_close($connexion);
?>