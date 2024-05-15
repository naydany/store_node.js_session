<?php
require_once('templates/header.php');

echo "<ul>";

// TODO
// - Your name is XXXXX
echo "<li> your name is ".$_GET["name"]."<br>";
// - Your hobbies areXXXXX
echo "<li> your hobbies is ".$_GET["hobby"]."<br>";
// - You are a boy/girl

// $female = 'boy';
if (isset($_GET["gender"])){
    echo "<li>" .$_GET["gender"]=='mail'?'I am a boy':'I am a girl'."<br>";
}



echo "</ul>";


require_once('templates/footer.php');
