<?php 

  $dir = "headerFiles/headerLanding.php";
  require_once $dir;
?>
  <?php
        if (isset($_POST['submit'])) {
            $date  = $_POST['date'];
            $timeVal = $_POST['timeVal'];
            $emailVal = $_POST['emailVal'];
            $nameVal = $_POST['nameVal'];
            if($emailVal == ''){
              echo '<script>alert("Kindly Provide an Email Address")</script>';
            }
            if($date == ''){
              echo '<script>alert("Kindly Pick a Schedule Date")</script>';
            }
            if($nameVal == ''){
              echo '<script>alert("Your name cannot be empty")</script>';
            }
            else{
              $subject = "New Booking for Driving Lessons";
              // Content-Type helps email client to parse file as HTML 
              // therefore retaining styles
              $headers = "MIME-Version: 1.0" . "\r\n";
              $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
              $message = "<html>
              <head>
                <title>Hello, A new user just book a driving lesson</title>
              </head>
              <body>
              <p>Someone requested for a driving lesson now</p>
                  <h4> Name --> ".$nameVal."</h4><br>
                  <h4>Schedule Date --> ".$date."</h4><br>
                  <h4>Schedule Time -->".$timeVal."</h4>

                  <br><br>
                  <small><i>Deployed by Oyebola Simeon</i></small>
              </body>
              </html>";
              If (mail('simeonoyekunleoyebola@gmail.com, oooyeyemi@gmail.com', $subject, $message, $headers)) {
               echo '';
              }else{
             echo 'error';
              }
              
              include "headerFiles/connection.php";
                $query = "INSERT INTO driving_lesson(date,timeVal,emailVal,nameVal,status,color) VALUES('$date', '$timeVal', '$emailVal', '$nameVal','pending','danger')";
                // query the database;
                $result = $db_connect->query($query);
           
            echo '<script>alert("Your Booking has been succesfully submitted, we will get back to you shortly")</script>';
            
            }
    
         
        }
    
        
    ?>
<section id="heros" >
      <div class="hero-container" data-aos="fade-up">
       
        <h2>Get along with us</h2>
        <a style="text-decoration: none;" type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#exampleModalCenter">Book Driving Lesson</a>
      </div>

      <div id="exampleModalCenter" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Schdule a driving lesson with us</h4>
      </div>
      <div class="modal-body">
        <span class="warning-text">Fill in neccessary information..</span>

    <!-- Form Scheduling Section -->
        <form action="" method="POST">
        <br>
        <label for="date" style="margin-top:3vh !important; display: flex; margin: auto;">Schedule a Date</label>
        <input type="date" required name="date" style="background: 8D2C28;  min-height:5vh; width: 50%; margin: auto; display: flex;" />

        <br>
        <label for="timeVal" style="margin-top:3vh !important; display: flex; margin: auto;">Schedule Time</label>
        <input type="time" required name="timeVal" style="background: 8D2C28;  min-height:5vh; width: 50%; margin: auto; display: flex;" />

        <br>
        <label for="emailVal" style="margin-top:3vh !important; display: flex; margin: auto;">Your Email</label>
        <input type="email" required autocomplete="off" name="emailVal" style="background: 8D2C28;  min-height:5vh; width: 50%; margin: auto; display: flex;" />

        <br>
        <label for="nameVal" style="margin-top:3vh !important; display: flex; margin: auto;">Your Name</label>
        <input type="text" required autocomplete="off" name="nameVal" style="background: 8D2C28;  min-height:5vh; width: 50%; margin: auto; display: flex;" />
      </div>
      <div class="modal-footer">
      <a href="./index.php" type="button" style="color: #fff; text-decoration: none;" class="btn btn-success">< Homepage</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Schedule Lesson</button>
      </div>
    	</form>

        <!-- End Form Scheduling section here -->


    </div>

  </div>
</div>
    </section><!-- End Hero -->


    <audio
        controls
        src="./assets/audio.mp3" autoplay loop>
            Your browser does not support the
            <code>audio</code> element.
    </audio>

    <!-- Modal -->



    <?php 

  $dir = "headerFiles/footerLanding.php";
  require_once $dir;
?>