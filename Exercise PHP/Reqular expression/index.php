<?php
// $regex = "/^[a-zA-Z\s\d\.$#%*]+$/";
// $regex = "/^[A-Z][a-z][\d]$/";
// $regex = "/^[a-z]{3,}+$/";

// validate: a-z, d , 10
// $regex = "/^[a-z\d]{0,10}+$/";

// form number (855) 012 333 444
// $regex = "/^[(][\d]{3}[)][\s][\d]{3}[\s][\d]{3}[\s][\d]{3}$/";

// from email
$regex = "/^[a-z\d]+[.@][a-z\d]+[.][a-z]{2,}+$/";

// form email another way
$regex = "/^[a-z\d]+@][a-z\d]+\.[a-z]{2,}+$/";

$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (preg_match($regex, $_POST['text'])) {
        $message = "😊";
    } else {
        $message = "😢";
    }
}
?>
<form method="post">
    <input type="text" name="text">
    <button>Submit</button>
   <?= $message != ""? $message : ""?>
</form>