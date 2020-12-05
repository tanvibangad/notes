<?php 
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$dbname="notessharing";

$var1=$fname=$email=$password="";
$conn = new mysqli($mysql_host,$mysql_user,$mysql_password,$dbname);
if ($conn->connect_error)
{
    die("connection failed" . $conn->connect_error);
}
//echo "connection successful";


//******************************************following code is of sign in part********************************
if(isset($_POST["login"])){  
  
    if(!empty($_POST['email']) && !empty($_POST['password'])) {  
        $user=$_POST['email'];  
        $pass=$_POST['password'];  
        
        $query="SELECT * FROM `user_info` WHERE username='".$user."' AND password='".$pass."'";   
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0)  
        {  
            while($row=$result->fetch_assoc())  
            {  
                $dbusername=$row['username'];  
                $dbpassword=$row['password'];  
            }  
            if($user == $dbusername && $pass == $dbpassword)  
            {  
                session_start();  
                $_SESSION['sess_user']=$user;  
      
                /* Redirect browser */  
                //header("Location: member.php"); ---------------------->redirect to main page after sign in  
            }  
        } else {  
        echo "Invalid username or password!";  
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
}  

