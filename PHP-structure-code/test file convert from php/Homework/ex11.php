
<?php
$number = [1,2,3,4];
?>

<?php
//....
for ($i = 0; $i <count($number);$i++){
    echo $number[$i];
}
//...
foreach($number as $index => $value){
    echo $index;
}
//..
foreach($number as $value){
    echo $value;
}
?>