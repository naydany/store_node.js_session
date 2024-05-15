<?php
// Get current date
date_default_timezone_set('Asia/Phnom_Penh');

require_once('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['title']) && !empty($_POST['description'])) {
        if (isset($_POST['title']) && isset($_POST['description'])) {
            $title = $_POST['title'];
            $id = $_POST['id'];
            $description = $_POST['description'];
            $statement = $db->prepare("UPDATE posts SET title=:title,description=:description WHERE id=:id ");
            $statement->execute([
                ':title' => $title,
                ':description' => $description,
                ':id' => $id,
            ]);
            header('Location:index.php');
        }else {
            echo "<h1>All input must not emty</h1>";
        }
       
    } 
}
