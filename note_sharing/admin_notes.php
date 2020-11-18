<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $uname= $_POST["uname"];
        $eid= $_POST["eid"];
          $pwd= $_POST["pwd"];
            $loc= $_POST["loc"];
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "note_sharing";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO admin_details (user_name, email_id,password,location )
VALUES ('$_POST[uname]', '$_POST[eid]', '$_POST[pwd]', '$_POST[loc]')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully <a href = index.html> home</a> ";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
        ?>
    </body>
</html>
