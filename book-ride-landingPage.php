<?php 

  $dir = "headerFiles/headerLanding.php";
  require_once $dir;
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
        <form action="">
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Schedule Lesson</button>
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