<?php
//TODO: GET all values(Gender,Name,Batch,Bio,Skill) from inputs and display the result below
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['gender'])) {
        $name = $_POST['name'];
        $batch = $_POST['batch'];
        $skills = $_POST['skill'];

        if ( $_POST['gender']=== 'male') {
            $imagePath = 'images/male.jpg';
        } else if ($_POST['gender'] === 'female') {
            $imagePath = 'images/female.jpg';
        } else if ($_POST['gender'] === 'other') {
            $imagePath = 'images/other.jpg';
        }
    }
}
?>
<link rel="stylesheet" href="css/style.css">
<div class="user-info">
    <div class="user-info-header">
        <img id="userProfile" src="<?= $imagePath; ?>" alt="">
        <h2 id="userName"><?= $name; ?></h2>
        <span>Batch - <span id="userBatch"><?= $batch; ?></span><span>
    </div>
    <div class="user-info-body">
        <p id="userBio">I have study at PNC for <?php echo 2024 - $batch . ' years' ?> </p>
        <div id="userSkills">
            <span class="v"><?= $skills; ?></span>
        </div>
    </div>
</div>