

<?php

if ($_SERVER['REQUEST_METHOD']==='POST'){
    
}



function securecode($code){
    htmlspecialchars($code);
    trim($code);
    return $code;
}
?>