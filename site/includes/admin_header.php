<?php include "../database/credentials.php"; ?>

<?php ob_start(); ?>
<?php session_start(); ?>

<?php

if (!isset($_SESSION['email'])) {
    header("Location: ../pages/login.php");
} 

?>