<?php

session_start();

if ($_SESSION['logged']) {
    $_SESSION['logged'] = false;
    header("location: index.php");
    exit();
}
