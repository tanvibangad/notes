<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Admin panel</title>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
        <style>
            * {
  box-sizing: border-box;
}

.slider {
  width: 300px;
  text-align: center;
  overflow: hidden;
}

.slides {
  display: flex;
  
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  
  
  
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch;
  
  /*
  scroll-snap-points-x: repeat(300px);
  scroll-snap-type: mandatory;
  */
}
.slides::-webkit-scrollbar {
  width: 10px;
  height: 10px;
}
.slides::-webkit-scrollbar-thumb {
  background: black;
  border-radius: 10px;
}
.slides::-webkit-scrollbar-track {
  background: transparent;
}
.slides > div {
  scroll-snap-align: start;
  flex-shrink: 0;
  width:100%;
  height: 500px;
  margin-right: 50px;
  border-radius: 10px;
  background: #eee;
  transform-origin: center center;
  transform: scale(1);
  transition: transform 0.5s;
  position: relative;
  
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 100px;
}
.slides > div:target {
/*   transform: scale(0.8); */
}
.author-info {
  background: rgba(0, 0, 0, 0.75);
  color: white;
  padding: 0.75rem;
  text-align: center;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  margin: 0;
}
.author-info a {
  color: white;
}



.slider > a {
  display: inline-flex;
  width: 1.5rem;
  height: 1.5rem;
  background: white;
  text-decoration: none;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  margin: 0 0 0.5rem 0;
  position: relative;
}
.slider > a:active {
  top: 1px;
}
.slider > a:focus {
  background: #000;
}



html, body {

  overflow: scroll;
}
body {
 
  background: linear-gradient(to bottom, #74ABE2, #5563DE);
  font-family: 'Ropa Sans', sans-serif;
}
            
        </style>
        
        <style>
      #boxes {
        content: "";
        display: table;
        clear: both;
       margin-left: 15%;
      }
      
      #column1 {
        background-color: #a1edcc;
        float: left;
        height: 470px;
        width: 23%;
        padding: 0 10px;
      }
      #column2 {
        background-color: #a0e9ed;
        width: 29%;
        float: left;
        height: 470px;
       
        padding: 0 10px;
      }
      #column3 {
        background-color: #f497f1;
        float: left;
        height: 470px;
        width: 23%;
        padding: 0 10px;
      }
      h2 {
        color: #000000;
        text-align: center;
      }
      .footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}


.overlay {
 
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
    </style>
    </head>
    <body>
        
       <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
      <a href="index_php.php">Home</a>
      <br>
    <a href="Add_admin.html">Add Admin</a>
    <br>
    <a href="check_user.php">Check User</a>
    <br>
    <a href="Feedback_admin.php">Feedback</a>
    <br>
    <a href="Login_admin.html">Logout</a>
    
  </div>
</div>

        <br>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Admin Panel</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script> 
        
        <div class="slider" style="width: 100% " >
  
  <a href="#slide-1">1</a>
  

  <div class="slides" >
      <?php

$con = mysqli_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysqli_select_db($con,"note_sharing" );

 

$result = mysqli_query($con,"SELECT * FROM uploaded_notes where topic=0 LIMIT 1;");

 
$count=1;

 if (mysqli_num_rows($result)===0) {
     echo "<div id='slide-".$count."'style='width: 100%'><p>No more files to review !!</></div>";
     
 }
else{
while($row = mysqli_fetch_array($result))

  {
$a=$row['email_id'];


  

  echo "<div id='slide-".$count."'style='width: 100%'><embed src='pdfreader.php' height='500' width='900'/></div>";
$count++;
  }


}




?>
    
       
    
    
  </div>
</div>
       <center>
           <form method="post" >
      <input type="submit" class="button button4" value="Accept" name="accept">
        <input type="submit" class="button button4" value="Reject" name="reject">
        </form>
       </center>
    <?php
		if(isset($_POST['accept'])) { 
            
            $b="update uploaded_notes set topic=1 where email_id='".$a."';";
           
            if ($con->query($b) === TRUE) {
                echo '<script type="text/javascript">';
echo ' alert("Record updated successfully")';  //not showing an alert box.
echo '</script>';
 
} else {
  echo "Error updating record: " . $con->error;
}

            
        } 
        if(isset($_POST['reject'])) { 
            
            $c="delete from uploaded_notes where email_id='".$a."';";
           
            if ($con->query($c) === TRUE) {
                 echo '<script type="text/javascript">';
echo ' alert("Record deleted successfully")';  //not showing an alert box.
echo '</script>';
  
} else {
  echo "Error deleting record: " . $con->error;
}
        } 
        
         

        
        mysqli_close($con);
	?> 
        <!--=======================================================================-->
       
     
       </center>
       
    
    </body>
</html>