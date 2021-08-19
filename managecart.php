<?php


session_start();

$usr = $_SESSION['usr'];
$nm = $_POST['Item_name'];

$dt = date("Y-m-d");
// echo $usr;
// echo $nm;
// echo $qn;
$date=date_create($dt);
date_add($date,date_interval_create_from_date_string("15 days"));
$rdt = date_format($date,"Y-m-d");

$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
 
$bulk = new MongoDB\Driver\BulkWrite;
$doc1 = ['User' => $usr, 'Book_name'=> $nm, 'Date' => $dt, 'return_date' => $rdt];
$bulk->insert($doc1);
$mng->executeBulkWrite('project.issued', $bulk);

?>