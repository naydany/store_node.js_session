<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] != "") {
        echo validateInput($_POST['username']);
    } else {
        echo "Please enter a username";
    }

    if ($_POST['pass']!= "") {
        echo validateInput($_POST['pass']);

    } else {
        echo "Please enter password";
    }

}

function validateInput($value) {
    $value = htmlspecialchars($value);
    $value = trim($value);
    return $value;
}