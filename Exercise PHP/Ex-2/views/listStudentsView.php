<link rel="stylesheet" href="assets/css/style.css">
<?php
require_once 'models\student.php';
// TODO
$students = getGenders();
print_r($students);
$classs = getClasses();
foreach ($classs as $class) {
    $getclass =$class;
}
$getstudents =getStudents();
foreach ($getstudents as $getstudent) {
    $into = $getstudent;
}

if ($students['gendername'] === 'mail')
?>

<h1>Student Management</h1>
<button class="addStudent-btn btn teal">
    <a href="views/addStudentView.php">Add Student +</a>
</button>
<div class="container">
    <?php
    foreach ($students as $student) :
        
    ?>
            <div class="card box-shadow">
                <div class="card-profile">
                    <!-- TODO  -->
                    <img src="//TODO" alt="">
                </div>
                <div class="card-info">
                    <h2><!-- TODO  --><?= $into['studentName'] ?></h2>
                    <h4>From batch:<?= $getclass['className'] ?></h4>
                    <span><b>Email:<!-- TODO  --><?= $into['studentEmail'] ?></span>
                    <p><b>Student hobbie:<!-- TODO  --><?= $into['studentHobby'] ?> </p>
                </div>
                <div class="card-btn">
                    <button class='btn teal'><a href="views/editStudentView.php?studentID=//TODO">Edit</a></button>
                    <button class='btn warning'><a href="views/deleteStudentView.php?studentID=//TODO">Delete</a></button>
                </div>
            </div>
    <?php
        endforeach;
  
    ?>
</div>