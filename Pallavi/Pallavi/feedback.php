
<?php
require_once 'feed_all.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title> Feedback form</title>
  <script src="https://use.fontawesome.com/a6f0361695.js"></script>
  <link rel="stylesheet" type="text/css" href="feedback.css">
</head>
<body bgcolor="#A8FAEB">
<h2 id="fh2">WE APPRECIATE YOUR FEEDBACK!</h2>


<form id="feedback" action="feed_all.php" method="Post">
  <div class="pinfo">Your personal info</div>
  
<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user"></i></span>
  <input  name="fname" placeholder="John Doe" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input name="email" type="email" class="form-control" placeholder="john.doe@yahoo.com">
     </div>
  </div>
</div>

 <div class="pinfo">Rate our overall services.</div>
  

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-heart"></i></span>
  <select class="form-control" id="rate" name="rate">
      <option value="1star">1</option>
      <option value="2stars">2</option>
      <option value="3stars">3</option>
      <option value="4stars">4</option>
      <option value="5stars">5</option>
    </select>
    </div>
  </div>
</div>

 <div class="pinfo">Write your feedback.</div>
  

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
  <textarea class="form-control" id="review" name="review" rows="3"></textarea>
 
    </div>
  </div>
</div>

 <button type="submit" class="btn btn-primary" name="submit">Submit</button>


</form>
</body>
</html>


