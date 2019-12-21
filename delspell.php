<?php
include 'db.php';
global $db;
$pid=$_POST['pid'];
$sid=$_POST['data'];
$query = "DELETE FROM playspells WHERE pid=:pid AND sid=:sid LIMIT 1";
	$stmt = $db->prepare($query);
	$stmt->bindParam(":pid",$pid );
	$stmt->bindParam(":sid",$sid );
	$stmt->execute();
?>