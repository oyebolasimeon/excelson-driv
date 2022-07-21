<?php 

  $dir = "headerFiles/header.php";
  require_once $dir;
?>


<section id="portfolio" class="portfolio section-bg">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>EXCELSON</span>
            <h2>PDF Resources</h2>
            <p>This includes Drivers handbook from MPI and are well organized here. Click on the cards to access PDFs</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="" class="filter-active"></li>
              </ul>
            </div>
          </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">

        <?php
		include "headerFiles/connection.php";
		$sql = "SELECT * FROM resources where type='pdf' order by id desc";	
		  $query = $db_connect->query($sql);

            // loop through the results
            while ($row = $query->fetch_assoc()) {
		?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="./assets/video-bg.jpg" style="height:30%;" class="img-fluid" alt="">
                    <div class="portfolio-info">
                    <h4><?php echo $row['title']; ?></h4>
                        <p><?php echo $row['version']; ?></p>
                    </div>
                    <div class="portfolio-links">
                    <a href="admin/assets/images/videoimage/<?php echo $row['image']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-video"></i></a>
                         </div>
                </div>
            </div>
            
            <?php
		}
		?>

        </div>
    </div>
</section>


<?php 

  $dir = "headerFiles/footer.php";
  require_once $dir;
?>