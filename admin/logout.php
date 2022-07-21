<?php
	session_start();
include "connection.php";
$id=$_SESSION['email'];
$q=mysqli_query($db_connect,"select * from `datalogin` where email='$id'");
$res=mysqli_fetch_assoc($q);

	unset($_SESSION['email']);
   session_destroy();
	header("location:index.php");
?>
