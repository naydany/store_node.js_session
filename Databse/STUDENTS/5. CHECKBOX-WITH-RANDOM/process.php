<?php require_once 'templates/header.php' ?>

<?php
$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
// CODE HERE 
if ($_SERVER['REQUEST_METHOD']) {
    if (isset($_GET['subjects'])) {
        $subjects = $_GET['subjects'];
    }
}
?>

<?php
foreach ($colors as $color) :
    $bg = $color;
endforeach;

?>

<div class="card">

    <div class="card-body d-flex flex-wrap gap-2 ">

        <?php
        // CODE HERE
        for ($i = 0; $i < count($subjects); $i++) {
            $bg = 'bg-' . $colors[$i];
            echo  "<p class='$bg p-1 rounded'>$subjects[$i].</p>";
        }

        ?>

    </div>
</div>

<?php require_once 'templates/footer.php' ?>e