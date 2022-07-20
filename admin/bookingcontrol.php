<?php
include("../headerFiles/connection.php");
extract($_REQUEST);
$booking_id=$_GET['booking_id'];
$q=mysqli_query($db_connect,"select * from driving_lesson where id='$booking_id'");
$res=mysqli_fetch_assoc($q);

 $to = $res['emailVal'];
 $id = $res['id'];
 $subject = "Excelson Driving School";
 $headers = "MIME-Version: 1.0" . "\r\n";
 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 $message = "<html>
 <head>
     <title>You have new message from Excelson drving school</title>
 </head>
 <body>
     <h1>Your Driving Lesson booking is confirmed, We will contact you soon, Thanks</h1>
 </body>
 </html>";
 If (mail($to, $subject, $message, $headers)) {
  echo '';
 }else{
echo 'error';


           }
$query="update driving_lesson SET status='Confirmed', color='success'  where id=$id";	
mysqli_query($db_connect,$query);	
echo '<script>alert("Driving Lesson Confirmed Succesfull")</script>';
echo '<script>location.href="driving_lesson.php";</script>';	

	
?>
