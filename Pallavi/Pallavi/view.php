<?php 
$dbh=new PDO("mysql:host=$mysql_host;dbname=$dbname",$mysql_user,$mysql_password);
$id=isset($_GET['id'])? $_GET['id']:"";
$stat=$dbh->prepare("select * from upload where id=?");
$stat->bindParam(1,$id);
$stat->execute();
$row = $stat-> fetch();

header('Content_Type:'.$row['mime']);
echo $row ['data1'];