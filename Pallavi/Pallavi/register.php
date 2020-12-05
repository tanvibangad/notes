<?php 
require_once('register-connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="register.css">
    <script type="text/javascript" src="register.js"></script>
</head>
<body bgcolor="#A8FAEB">
<div id='AppendHere'></div>
<!--start login form-->
<form id="loginform" action="#" method="Post" ><!--action="the site link"-->
<!--start header-->
<h1>Register !!!</h1>
    <!--site link-->
    <!--end site-->
    
    <div class="input-info">
        <!--the input div contains the information of the user-->
        <i class="fa fa-user"></i>
        <!--user name-->
        <input type="text" name="fname" placeholder="User-Name" required>
        <i class="fa fa-envelope"></i>

        <!--stream-->
        <input type="text" name="stream" placeholder="Stream" required>
        <i class="fa fa-envelope"></i>

        <!--degree-->
        <input type="text" name="degree" placeholder="Degree" required>
        <i class="fa fa-envelope"></i>

        <!--subject-->
        <input type="text" name="subject" placeholder="Subject" required>
        <i class="fa fa-envelope"></i>

        <!--user email-->
        <input type="email" name="email" placeholder="E-mail" required autocomplete="off">
        <i class="fa fa-lock"></i>

        <!-- password-->
        <input type="password" name="password" placeholder="Password" required>
    </div>

    <div class="log-sign"><!--the login button and the sign up button>[to the sign up page]-->
        <button class="login" form="loginform" name="signup"><i class="fa fa-mail-forward (alias)"></i> Log In</button><!--log in-->
    </div><!--end of the log-sign-->
<br> <br>
<p class="forget-password">forgot password??<a href="#">click here</a></p>

</form>
<!--End login form-->
</body>
</html>