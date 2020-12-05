<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Admin login error</title>
    </head>
    <body>
        <?php
        include('config.php'); 
        $username = $_POST['uname'];  
    $password = $_POST['pwd'];  
 
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from admin_details where email_id = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
           header("Location:index_php.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password. <a href='Login_admin.html'>Tryagain</a></h1>";  
        } 

        ?>
    </body>
</html>
