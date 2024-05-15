

<?php

//connect ot database

$db = new PDO('mysql:host=localhost;dbname=review_db', 'root' , '');

function getitem()
{
    global $db;
    $statement = $db->prepare('SELECT * FROM users ORDER BY id');
    $statement->execute();
    return $statement->fetchAll();
}


function getitemByID($id)
{
    global $db;
    $statement = $db->prepare('SELECT * FROM items WHERE id = :id')
}

function deleteItem($id)
{

}

function updateItem($id,$name,$age,$province)
{

}

function createItem($name,$age,$province)
{

}