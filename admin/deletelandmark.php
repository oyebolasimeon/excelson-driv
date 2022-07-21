<?php
include("../headerFiles/connection.php");
 $id=$_GET['id'];

$sql=mysqli_query($db_connect,"delete from landmarks where id='$id'");

echo '<script>alert("Landmark Deleted Succesfull")</script>';
echo '<script>location.href="landmark.php";</script>';	
?>