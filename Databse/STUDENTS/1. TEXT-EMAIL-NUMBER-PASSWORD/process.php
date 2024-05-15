<?php // HEADER 
require_once('templates/header.php')
?>
<ul class="list-group">
<?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST'){
     if ( isset($_POST['name']) ){
        $name = $_POST['name'] ;
        $number = $_POST['numberphone'] ;
        $email = $_POST['email'] ;
        $password = $_POST['password'] ;
        $message = $_POST['message'] ;
     }
   }
?>
    <li class="list-group-item"> Your name :<?= $name  ?></li>
    <li class="list-group-item"><?= $email ?></li>
    <li class="list-group-item"><?php echo $password ?></li>
    <li class="list-group-item"><?php echo $number ?></li>
    <li class="list-group-item"><?php echo $message ?></li>

</ul>
<?php // FOOTER 
require_once('templates/footer.php')
?>