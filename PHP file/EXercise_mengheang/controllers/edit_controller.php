<?php
// TODO:

require_once '../models/student.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['age'])) {
        if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['province'])) {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $province = $_POST['province'];
            $id = $_POST['id'];
            updateStudent($id, $name, $age, $province);
            header('Location:../index.php');
        } else {
            header('Location:../index.php');
        }

        header('Location:../index.php');
    }
}
