<?php
include("../headerFiles/connection.php");
 $id=$_GET['id'];

$sql=mysqli_query($db_connect,"delete from resources where id='$id'");

echo '<script>alert("Resources Deleted Succesfull")</script>';
echo '<script>location.href="video_resources.php";</script>';	
?>