<?php
require_once('login-connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="register.css">
    <script type="text/javascript" src="register.js"></script>
</head>
<body bgcolor="#A8FAEB">
<div id='AppendHere'></div>
<!--start login form-->
<form id="loginform" action="#" method="Post" ><!--action="the site link"-->
<!--start header-->
<h1>Log-In</h1>
    <!--site link-->
    <!--end site-->
    
    <div class="input-info">
        <!--the input div contains the information of the user-->
        <i class="fa fa-user"></i>
        <!--user email-->
        <input type="email" name="email" placeholder="E-mail" required autocomplete="off">
        <i class="fa fa-lock"></i>
        <!-- password-->
        <input type="password" name="password" placeholder="Password" required>
    </div>

    <div class="log-sign"><!--the login button and the sign up button>[to the sign up page]-->
        <button class="login" form="loginform" name="login"><i class="fa fa-mail-forward (alias)"></i> Log In</button><!--log in-->

        <a href="register.php" target="_blank"><!--the link to the sign up page-->
            <button class="signup" form="signupform"><i class="fa fa-plus"></i> Sign Up</button>
        </a>
    </div><!--end of the log-sign-->
<br> <br>
<p class="forget-password">If you forget your password please <a href="#">click here</a></p>

</form>
<!--End login form-->
</body>
</html>