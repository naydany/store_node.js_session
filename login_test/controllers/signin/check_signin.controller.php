

<?php


require "../../database/database.php";
require "../../models/user.model.php";


if ($_SERVER['REQUEST_METHOD']=='POST'){

    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['password']);
    $incryptpassword = password_hash($pass, PASSWORD_BCRYPT);

    $user = accountExist($email);
    if (count($user) > 0){
        if(password_verify($incryptpassword,$user['password'])){
            echo "yes";
        }else{
            echo "wrong password";
        }
    }else{
        echo "wrong email";
    }
}




//$incryptpassword = password_hash(password, PASSWORD_BCRYPT);
