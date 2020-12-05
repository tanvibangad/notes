<?php
include_once 'config.php';
$sql = "DELETE FROM admin_details WHERE email_id='" . $_GET["userid"] . "'";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('recoed deleted')";
    header("location:check_user.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>