<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['choice']) && isset($_POST['major']) && isset($_POST['skill'])) {
        $choice = $_POST['choice'];
        $major = $_POST['major'];
        $skills = $_POST['skill'];

        $result = '';
        foreach ($skills as $skill) {
           $result.= $skill. ', ';
       }
?>
<div class="container mt-5">
    <ul class="list-group">
        <li class="list-group-item"><?= $choice; ?></li>
        <li class="list-group-item"><?=  $major; ?></li>
        <li class="list-group-item"><?= $result; ?></li>
    </ul>
</div>
<?php
    } else {
        echo "Please fill out all fields";
    }
}