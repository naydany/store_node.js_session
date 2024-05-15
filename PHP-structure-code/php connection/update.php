<?php
$host = "localhost"; //server name 
$database = "php_connect"; //database name
$username = "root"; //username
$password = ""; //password

$db = new PDO("mysql:host=$host;dbname=$database", $username, $password);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $description = $_POST['message'];
    $id = $_POST['id'];

    $statement = $db->prepare("UPDATE posts SET name =:name ,message =:description WHERE id=:id");
    $statement->execute([
        ':id' => $id,
        ':name' => $name,
        ':description' => $description,
    ]);

    header('Location:index.php');
}
