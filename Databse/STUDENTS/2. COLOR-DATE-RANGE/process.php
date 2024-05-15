<?php
 // HEADER
require_once('templates/header.php');
?>
<?php
    // YOUR CODE HERE 
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        if (isset($_GET['color'])&& isset($_GET['arrage']) && isset($_GET['datetime'])){
            $color = $_GET['color'];
            $rage = $_GET['arrage'];
            $date = $_GET['datetime'];
        }
    }
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?=$color ?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?=$rage ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?=$date ?></span>
    </div>

<?php
 //FOOTER 
 require_once('templates/footer.php');
?>