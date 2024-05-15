<?php
$user = [
    "name" => "rady",
    "age" => 27
]
?>

<?php
echo $user['name'];

//delet property
unset($user['age']);
print_r($user)
?>