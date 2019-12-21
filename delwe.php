<?php
include 'db.php';
global $db;
$pid=$_POST['pid'];
$iid=$_POST['data'];
$query = "DELETE FROM playitems WHERE pid=:pid AND iid=:iid LIMIT 1";
$stmt = $db->prepare($query);
$stmt->bindParam(":pid",$pid );
$stmt->bindParam(":iid",$iid );
$stmt->execute();
?>