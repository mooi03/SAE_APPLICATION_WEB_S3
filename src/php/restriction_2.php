<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['perm'] != 2) {
    header('Location: connexion.php');
    exit();
    }
?>