<?php
include 'db.php';
global $db;
$pid=$_POST['pid'];
$iid=$_POST['data'];
$query = "INSERT INTO playspells (pid,sid) VALUES(:pid, :sid)";
$stmt = $db->prepare($query);
$stmt->bindParam(":pid",$pid );
$stmt->bindParam(":sid",$iid );
$stmt->execute();

?>