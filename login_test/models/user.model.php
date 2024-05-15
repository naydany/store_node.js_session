
<?php

function  createAccount(string $name, string $email, string $password): bool {
    global $connection;
    $statement = $connection->prepare("INSERT INTO users (name,email,password) value (:name, :email,:password)");

    $statement->execute([
        ':name'=> $name,
        ':email'=> $email,
        ':password'=>$password,
   
    ]);

    return $statement->rowCount() > 0;
}


function accountExist(string $email): array{
    global $connection;
    $statement = $connection->prepare('SELECT * FROM users WHERE email= :email');

    $statement->execute([
        ':email' => $email,
    ]);

    if ( $statement->rowCount() > 0){
        return $statement->fetch();
    }else{
        return [];
    }
  

}





