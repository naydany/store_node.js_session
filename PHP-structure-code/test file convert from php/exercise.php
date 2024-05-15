<?php 
$students = [
    ['name' => 'mengyi' , 'age' => 30 ,'status'=>'single'],
    ['name' => 'nha' , 'age' => 18 ,'status'=>'married'],
    ['name' => 'Theavy' , 'age' => 19 ,'status'=>'in-relationship'],
    ['name' => 'Hak' , 'age' => 20 ,'status'=>'unknown'],
]
?>

<?php
foreach ($students as $value) {
    if ($value['status'] === 'single') {
        echo $value['name'];
    }
}

$toage = $students[0]['age'];
foreach ($students as $value){
    if ($toage>$value['age']){
        $toage = $value['age'] ;
        echo $value['name'];
    }
}

foreach ($students as $value){
    if ($value['age']>18 && $value['age']<30){
        echo $value['name'];
    }
}
?>




