<?php
require_once 'credentials.php';

session_start();

$msg = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "select * from admin where email='" . $user_email . "' AND password='" . $password . "' ";
    $res = $data->prepare($sql);
    $res->execute();


    $admin = $res->fetch(PDO::FETCH_OBJ);

    if ($admin) {

        $_SESSION['logged'] = true;
        $_SESSION['email'] = $admin->email;
        $_SESSION['password'] = $admin->password;
        $_SESSION['username'] = $admin->username;

        header("location:home.php");
    } else {
        $msg = true;
    }
}
