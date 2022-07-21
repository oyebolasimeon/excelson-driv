<?php
	session_start();
	if(ISSET($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		include("../headerFiles/connection.php");
		$query = $db_connect->query("SELECT * FROM datalogin WHERE email = '$email' && password = '$password'");
		$fetch = $query->fetch_array();
		$valid = $query->num_rows;
		$role = $fetch['role'];	
			if($valid > 0){
				if($role == "owner"){
			$_SESSION['email'] = $fetch['email'];
					extract($_REQUEST);
					$id=$_SESSION['email'];
					$q=mysqli_query($db_connect,"select * from datalogin where email='$id'");
					$res=mysqli_fetch_assoc($q);

					echo "<script>alert('Login Successfully')</script>";	

				echo '<script>location.href=" dashboard.php";</script>';
					
				}
				if($role == "admin"){
					$_SESSION['email'] = $fetch['email'];
					extract($_REQUEST);
					$id=$_SESSION['email'];
					$q=mysqli_query($db_connect,"select * from datalogin where email='$id'");
					$res=mysqli_fetch_assoc($q);

					
					header("location: admin.php");
				}
			
			}else{
				echo "<script>alert('Account Does Not Exist!')</script>";
				echo "<script>window.location = 'index.php'</script>";
			}
						
		
		}
	
	