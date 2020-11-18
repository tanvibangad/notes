<!DOCTYPE html>

<html>

<head>



<style type="text/css">
 
table {     
width: 40%;
border: 0.1em solid;    }
 
td {    
border: 0.1em solid;    }
 
th {    
border: 0.1em solid;    }
 

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

<body
    background-image: url('linear-blue-gradient.jpg');>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="Add_admin.html">Add Admin</a>
    <br>
    <a href="check_user.php">Check User</a>
    <br>
    <a href="Feedback_admin.html">Feedback</a>
    <br>
    <a href="Login_admin.html">Logout</a>
    
  </div>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Admin Panel</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script> 
<?php

$con = mysqli_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysqli_select_db($con,"note_sharing" );

 

$result = mysqli_query($con,"SELECT * FROM admin_details");

 

echo "<table border='1'>

<tr>



<th>User name</th>

<th>Email Id</th>

<th>Location</th>

</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  

  echo "<td>" . $row['user_name'] . "</td>";

  echo "<td>" . $row['email_id'] . "</td>";

  echo "<td>" . $row['location'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($con);

?>

</body>

</html>
