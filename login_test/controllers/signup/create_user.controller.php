
<?php

session_start();

require "../../database/database.php";
require "../../models/user.model.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['password']);
    $incrypt = password_hash($pass, PASSWORD_BCRYPT);

   
    $user = accountExist($email);

    if (count($user) == 0) {
        $iscreate = createAccount($name, $email, $incrypt);
        header('Location:/signin');
        $_SESSION['success'] ='Account successfully created';
    } else {
        echo "<h1>Account already Exist/h1>";
    }

}
