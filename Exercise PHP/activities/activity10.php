<?php
    $numbers = [5, 3, 4, 0, 5, 1];

    // Use a WHILE loop to display the numbers until it is a 0 (so display 5, 3, 4 only)
    $i = 0;
    $isgot = FALSE;
    while ($i < count($numbers) && !$isgot){
        if ($numbers[$i]!=0){
            print_r($numbers[$i]);
           
        }else{
            $isgot = TRUE;
        }
        
        $i++;
    }
    
    
?>