<?php
// include of header
require('includes/header.php');
//  Get value from URL here

if (isset($_GET['page'])) {
    echo $_GET['page'];
}else{
    echo '<h1>Home</h>';
}

//  include of footer 
require('includes/footer.php');





