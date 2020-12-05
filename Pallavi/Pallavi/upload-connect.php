<?php 
$mysql_host="localhost";
$dbport="32769";
$mysql_user="root";
$mysql_password="";
$dbname="notessharing";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_password,$dbname);
if ($conn->connect_error)
{
    die("connection failed" . $conn->connect_error);
}

//echo "connection successful";

//******************upload file code**********************

$dbh=new PDO("mysql:host=$mysql_host;dbname=$dbname",$mysql_user,"");
if(isset($_POST['btn'])){

	$filename= $_FILES['pdf_file']['name']; //pdf_file is the name given in input field 
	$filetype= $_FILES['pdf_file']['type'];
	$data1=file_get_contents($_FILES['pdf_file']['tmp_name']);
	$stmt=$dbh->prepare("INSERT INTO `upload` VALUES ('',?,?,?)");
	$stmt->bindParam(1,$filename);
	$stmt->bindParam(2,$filetype);
	$stmt->bindParam(3,$data1);
	$stmt->execute();
}

$stat=$dbh->prepare("SELECT * FROM `upload`");
$stat->execute();
while($row = $stat->fetch()){
	echo "<ol><li> <a target='_blank' href='view.php?id=".$row['id']."'>".$row['filename']."</a><br/> <embed src='data:".$row['mime'].";base64,".base64_encode($row['data1'])."' width='200'/></li></ol>";
}