<?php 

  $dir = "headerFiles/header.php";
  require_once $dir;
?>


<section id="portfolio" class="portfolio section-bg">
        <div class="container">

          <div class="section-title" data-aos="fade-down">
            <span>EXCELSON</span>
            <h2>Video Resources</h2>
            <p>Driving Lesson Video Resources. Click on the cards to access video</p>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="" class="filter-active"></li>
              </ul>
            </div>
          </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="./assets/video-bg.jpg" style="height:30%;" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>MPI Driving Test</h4>
                        <p>episode one</p>
                    </div>
                    <div class="portfolio-links">
                    <a href="https://youtu.be/6l9qilqPSXU?t=176" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-video"></i></a>
                         </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="./assets/video-bg.jpg" style="height:30%;" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>MPI Driving Test</h4>
                        <p>episode two</p>
                    </div>
                    <div class="portfolio-links">
                    <a href="https://youtu.be/6l9qilqPSXU?t=27" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-video"></i></a>
                         </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="./assets/video-bg.jpg" style="height:30%;" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>MPI Driving Test</h4>
                        <p>episode three</p>
                    </div>
                    <div class="portfolio-links">
                    <a href="https://youtu.be/6l9qilqPSXU?t=107" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-video"></i></a>
                         </div>
                </div>
            </div>

        </div>
    </div>
</section>


<?php 

  $dir = "headerFiles/footer.php";
  require_once $dir;
?>