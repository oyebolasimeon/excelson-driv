<?php
 $db_connect = new mysqli("localhost", "root", "", "excelson");
      if ($db_connect->connect_error) {
        die("Could not connect to the databse: ". $conn->connect_error);
        }
?>


