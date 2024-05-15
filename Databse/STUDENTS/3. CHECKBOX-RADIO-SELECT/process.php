<?php 
// HEADER
require_once('templates/header.php');
?>
<?php
// YOUR CODE HERE
if ($_SERVER['REQUEST_METHOD']==='GET'){

    if(isset($_GET['provinces']) && isset($_GET['subject']) && isset($_GET['gender'])){
        $provinces = $_GET['provinces'];
        $subjects = $_GET['subject'];
        $gender = $_GET['gender'];
    }
}
function changegender($gen){
    if ($gen == 'male'){
        $img = 'images/male.png';
    }else{
        $img = 'images/female.png';
    }
    return $img;
}
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"> <?=$provinces ?> </h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
         <!-- YOUR CODE HERE [gender] -->
            <img src=" <?php echo changegender($gender) ?> " style='width:60px';
            
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            <?php
                // YOUR CODE HERE [subject]
                foreach($subjects as $subject){
                    echo $subject.' , ';
                }
            ?>
        </div>
    </div>

<?php
 // FOOTER
 require_once('templates/footer.php');
?>

