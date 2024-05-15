<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of fruits with id</title>
</head>

<body>
    
    <?php

    $fruits = ["mango", "apple", "banana", "coconut"];
    ?>

    <ul>

        <?php
        for ($i=0; $i < count($fruits); $i++) :
        ?>

            <li id= <?php echo $i ?>  > <?php echo $fruits[$i]; ?> </li>

        <?php
        endfor
        ?>

    </ul>

</body>

</html>