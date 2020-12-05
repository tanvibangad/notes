<?php 
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$dbname="notessharing";

$var2=$fname=$email=$rate=$review="";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_password,$dbname);
if ($conn->connect_error)
{
    die("connection failed" . $conn->connect_error);
}

//echo "connection successful";

// sql for select stmt and feedsql is for insert stmt
//***************************************insert statement for feedback*****************************************************
if(isset($_POST["submit"]))
{  
	if(!empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['rate']) && !empty($_POST['review'])) 
	{  
		$fname=$_POST['fname'];  
		$email=$_POST['email']; 
		$rate= $_POST['rate']; 
		$review=$_POST['review']; 
			
		$sql="SELECT * FROM `feedback` WHERE email='".$email."'";  //to see if anyone has same mail id or not
		$result= mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) == 0)  
		{   
			$feedsql="INSERT INTO `feedback`(fname, email, rate, review) VALUES('$fname','$email','$rate','$review')";  
			$result = mysqli_query($conn, $feedsql);
			
			if($result)
			{  
				echo "Feedback Recorded Successfully";  
			} 
			else 
			{  
				echo "Failure! Feedback Unsuccessful...Please try again!!!";  
			}  
	    }
        else{
            echo "error while entering feedback";
        }  
    }  
}