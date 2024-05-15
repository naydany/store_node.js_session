

<?php
$number = [1,2,3,4];

?>

<?php
//push number
$number[]=10;
//delet last number
array_pop($number);
//delet first number
array_shift($number);
//add new element at the first
array_unshift($number,1,2);
print_r($number);

?>