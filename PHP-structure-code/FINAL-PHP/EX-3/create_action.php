<?php
// Get current date
date_default_timezone_set('Asia/Phnom_Penh');

require_once('database.php');


if ($_SERVER['REQUEST_METHOD']==='POST'){
    if (!empty($_POST['title']) || !empty($_POST['description'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = getdate();
        $year =  $date['year'];
        $month =  $date['mon'];
        $day =  $date['mday'];
        $fullDate = "$year-$month-$day";
        
        $statement = $db->prepare('INSERT INTO posts (title,description,gat_date) value (:title,:description,:gat_date)');
    
        $statement->execute([
            ':title' => $title,
            ':description' => $description,
            ':gate_date' => $fullDate,
       
        ]);
        header('Location:index.php');
    }else{
        echo "<h1>You must input the field.</h1>";
    }
   

}

