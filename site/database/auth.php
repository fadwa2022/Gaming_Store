<?php require_once 'credentials.php';

session_start();

$msg = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "SELECT * FROM admin WHERE email= :email  AND password= :pswd ";
    $res = $data->prepare($sql);
    $res->bindParam(":email", $user_email);
    $res->bindParam(":pswd", $password);
    $user_email = $_POST["email"];
    $password = $_POST["password"];

    $res->execute();


    $admin = $res->fetch(PDO::FETCH_OBJ);

    if ($admin) {

        $_SESSION['id'] = $admin->id;
        $_SESSION['email'] = $admin->email;
        $_SESSION['password'] = $admin->password;
        $_SESSION['username'] = $admin->username;
        header("location: ../pages/home.php");
    } else {
        $msg = true;
    }
}
