<?php


session_start();

$usr = $_SESSION['usr'];
$nm = $_POST['Item_name'];
$m = new MongoDB\Driver\Manager("mongodb://localhost:27017");



$query = new MongoDB\Driver\Query(['User'=> $usr,'Book_name' => $nm]);

$rows = $m->executeQuery("project.issued",$query);

foreach($rows as $row){
    $dt =  $row->return_date ;
}
echo $dt;
$date=date_create($dt);
date_add($date,date_interval_create_from_date_string("15 days"));
$xt =  date_format($date,"Y-m-d");


$bulk = new MongoDB\Driver\BulkWrite;
$bulk->update(
    ['User'=> $usr,'Book_name' => $nm],
    ['$set' => ['return_date' => $xt]],
    ['multi' => false, 'upsert' => false]
);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$result = $manager->executeBulkWrite('project.issued', $bulk);

header('location:slide.php');


?>