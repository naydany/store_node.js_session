<?php
//TODO:
require_once "database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // var_dump($_POST);
    if ($_POST['name'] !== '' && $_POST['age']!== '' && $_POST['province']!== '') {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $province = $_POST['province'];
        $id = $_POST['id'];
        $statement = $connection->prepare("UPDATE users 
        SET name = :name, age = :age, province = :province 
        WHERE id = :id");
        $statement->execute([
            ':id' => $id,
            ':name' => $name,
            ':age' => $age,
            ':province' => $province,
        ]);
        header('Location: index.php');
    }
}
