<?php
    require_once "config.php";
     {
        $sql = "SELECT * FROM uploaded_notes where topic=0 LIMIT 1;";
		$result = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB <br> There are no more files left !!<br/>" . mysqli_error($con));
		$row = mysqli_fetch_array($result);
		header("Content-Type: application/pdf");
                
  echo $row["file"];}
	
	mysqli_close($con);
?>