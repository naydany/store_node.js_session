<?php require_once '../templates/header.php' ?>
    <div class="container p-4">
        <?php 

        require('../models/student.php');
        $student = getStudentById($_GET['id']);
       
  
        ?>
        <form action="../controllers/edit_controller.php" method="post">
            <input type="hidden" name="student_id">
            <div class="form-group">
                <input type="text" class="form-control" value="<?= $student['name']; ?>" placeholder="Name" name="name" >
            </div>
            <div class="form-group">
                <input type="number" class="form-control" value="<?=$student['age'];?>" placeholder="Age" name="age" >
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Province" name="province" value="<?=$student['province'];?>" >
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning btn-block">Update</button>
            </div>
        </form>
       
    </div>
<?php require_once '../templates/footer.php' ?>