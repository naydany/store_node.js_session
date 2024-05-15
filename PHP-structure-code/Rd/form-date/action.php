<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['date']) && isset($_POST['range']) && isset($_POST['choices'])) {
        $choices = $_POST['choices'];
        $date = date_create($_POST['date']);
        $range = $_POST['range'];

        $result = '';
        foreach ($choices as $choice) {
           $result.= $choice. ', ';
       }
?>
<div class="container mt-5">
    <ul class="list-group">
        <li class="list-group-item"><?= date_format($date,"l d, F  Y"); ?></li>  
        <li class="list-group-item"><?= $_POST['range'] ?></li>
        <li class="list-group-item"><?= $result; ?></li>
    </ul>
</div>
<?php
    } else {
       echo "Please fill out all fields";
    }
}