<?php
include 'db.php';
global $db;
$pid=$_POST['pid'];
$iid=$_POST['data'];
$query = "INSERT INTO playitems (pid,iid) VALUES(:pid, :iid)";
$stmt = $db->prepare($query);
$stmt->bindParam(":pid",$pid );
$stmt->bindParam(":iid",$iid );
$stmt->execute();

?>