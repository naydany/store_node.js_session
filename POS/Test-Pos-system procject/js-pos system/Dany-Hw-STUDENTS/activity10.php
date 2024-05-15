<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic class name</title>


    <style>
        .right {
            color:green;
            background:teal;
            padding:15px;
        }
        .wrong {
            color:red;
        }
    </style>
</head>

<body>
    
    <?php
    $status = "wrong";
    ?>


    <div class=<?php echo 'right' ?>>
        <div class =<?php echo $status ?>>Phnom Penh is the capital of France</div>
    </div>

</body>

</html>