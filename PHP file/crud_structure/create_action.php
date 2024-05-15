<?php
//TODO:
require_once "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // var_dump($_POST);
    if ($_POST['name'] !== '' && $_POST['age']!== '' && $_POST['province']!== '') {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $province = $_POST['province'];
        $statement = $connection->prepare("INSERT INTO users (name, age, province) 
        VALUES (:name, :age, :province)");
        $statement->execute([
            ':name' => $name,
            ':age' => $age,
            ':province' => $province,
        ]);
        header('Location: index.php');
    }
}
