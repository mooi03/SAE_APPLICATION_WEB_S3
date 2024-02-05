<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['perm'] != 3) {
    header('Location: connexion.php');
    exit();
    }
?>