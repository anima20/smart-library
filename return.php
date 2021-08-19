<?php

session_start();

$usr = $_SESSION['usr'];

$nm = $_POST['Item_name'];

echo $usr;
echo $nm;
$bulk = new MongoDB\Driver\BulkWrite;
$bulk->delete(['User' => $usr,'Book_name' => $nm], ['limit' => 1]);


$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$result = $manager->executeBulkWrite('project.issued', $bulk);
echo "Deleted";
?>