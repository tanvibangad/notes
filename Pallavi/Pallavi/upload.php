<?php 
require_once('upload-connect.php')
 ?>
 
<!DOCTYPE html>
<head>
	<title>upload page</title>
	<meta charset="utf-8" />
</head>
<body>
<form method="post" enctype="multipart/form-data"> 
	<input type="file" name="pdf_file" />
	<button name="btn">Upload</button>
</form>
</body>
</html>