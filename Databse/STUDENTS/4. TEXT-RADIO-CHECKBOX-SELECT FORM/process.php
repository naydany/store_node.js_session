<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
        if ($_SERVER['REQUEST_METHOD'] ==='POST' ){
            if (isset($_POST['name']) && isset($_POST['number']) && isset($_POST['email']) && isset($_POST['password'])&& isset($_POST['message']) && isset($_POST['province']) && isset($_POST['subjects']) && isset($_POST['gender'])){
                $name = $_POST['name'];
                $number = $_POST['number'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $message = $_POST['message'];
                $province = $_POST['province'];
                $subjects = $_POST['subjects'];
                $gender = $_POST['gender'];
            }
        }
    ?>
        <tr>
            <td><?php echo $name ?></td>
            <td><?php echo $email  ?></td>
            <td><?php echo $password ?></td>
            <td><?php echo $number ?></td>
            <td><?php echo $message  ?></td>
            <td><?php echo $province  ?> </td>
            <td>
                <?php 
                   // subjects
                   foreach( $subjects as  $subject){
                     echo $subject.' , ';
                   }
                ?>
            </td>
            <td><?php echo $gender ?></td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>