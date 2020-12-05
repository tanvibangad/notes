<?php 
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$dbname="notessharing";

$var1=$fname=$stream=$degree=$subject=$email=$password="";
$conn = new mysqli($mysql_host,$mysql_user,$mysql_password,$dbname);
if ($conn->connect_error)
{
    die("connection failed" . $conn->connect_error);
}
//echo "connection successful";


//******************************************following code is of register part********************************
if(isset($_POST["signup"]))
{  
	if(!empty($_POST['fname']) && !empty($_POST['stream']) && !empty($_POST['degree']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['password'])) 
	{  
		$fname=$_POST['fname']; 
		$stream=$_POST['stream']; 
		$degree=$_POST['degree'];
		$subject=$_POST['subject'];
		$email=$_POST['email'];  
		$password=$_POST['password']; 
			
		$query = "SELECT * FROM `user_info` WHERE email='".$email."'";  
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) == 0)  
		{   
			$sql="INSERT INTO `user_info`(fname,stream,degree,subject,email,password) VALUES('$fname','$stream','$degree','subject','$email','$password')";  
			$result = mysqli_query($conn, $sql);
			
			if($result)
			{  
				echo "Account Successfully Created";  
			} 
			else 
			{  
				echo "Failure!";  
			}  
		} 
		else 
		{  
			echo "That username already exists! Please try again with another.";  
		}  
	} 
	else 
	{  
		echo "All fields are required!";  
	}  
}  