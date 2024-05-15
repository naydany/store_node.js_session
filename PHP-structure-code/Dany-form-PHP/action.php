<?php
require_once('tamplates/header.php');
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  if (isset($_POST['firstname']) ){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    // $password = $_POST['password'];
    // $isstudent = $_POST['RadioOptions'];
    $subjects = $_POST['subjects'];
    $province = $_POST['provinces'];
  }
}
?>
    <div class="container">
   
        <div class="card text-dark " style="width: 750px; height:500px">
          <div class="lgimg">
            <img src="image/certivicate.png" alt="" class="img">
            <div class="lg">
              <img src="image/certivicate.png" alt="" class="img ">
            </div>
          </div>
          <h1 class="certificate">CERTIFICATE</h1>
          <p>OF APPRECEATION</p>
          <h2 class="name"><?=$firstname.' '.$lastname;?></h2>
          <div class="par">
            <p>Congradulation to <?=$firstname;?>. She has graduated from university in second years. She is <?=$age;?> year old and from <?=$province;?> province. She has hight knowledge at <?php 
              foreach($subjects as $subject){
                echo $subject.".";
              }
            ?></p>
          </div>
          <div class="contact">
            <p> <?=$email;?></p>
          </div>
        </div>
  
    </div>


<?php
require_once('tamplates/footer.php');
?>