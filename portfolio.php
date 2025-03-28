<?php 
include "common-header.php"
?>
 <!-- Testimonials Section -->
 <section id="testimonials" class="testimonials section light-background">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Testimonials</h2>
  <p>Have a preview from some of the happy clients we have served</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="swiper init-swiper">
    <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 600,
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": "auto",
        "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
        },
        "breakpoints": {
          "320": {
            "slidesPerView": 1,
            "spaceBetween": 40
          },
          "1200": {
            "slidesPerView": 2,
            "spaceBetween": 20
          }
        }
      }
    </script>
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg.." class="testimonial-img" alt="">
            <h3> Rev. Timothy Meny</h3>
            <h4>Rev </h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>I recently had the opportunity to experience the services of Oby Entertainment during my aunt’s funeral, and I must commend them for their exceptional professionalism and quality delivery. Losing a loved one is never easy, and ensuring everything runs smoothly in such an emotional moment requires reliable service providers</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>
      </div>
      <!-- End testimonial item -->

      <!--<div class="swiper-slide">-->
      <!--  <div class="testimonial-wrap">-->
      <!--    <div class="testimonial-item">-->
      <!--      <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">-->
      <!--      <h3>James Gor</h3>-->
      <!--      <h4>Designer</h4>-->
      <!--      <div class="stars">-->
      <!--        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>-->
      <!--      </div>-->
      <!--      <p>-->
      <!--        <i class="bi bi-quote quote-icon-left"></i>-->
      <!--        <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>-->
      <!--        <i class="bi bi-quote quote-icon-right"></i>-->
      <!--      </p>-->
      <!--    </div>-->
      <!--  </div>-->
      </div><!-- End testimonial item -->

      <!--<div class="swiper-slide">-->
      <!--  <div class="testimonial-wrap">-->
      <!--    <div class="testimonial-item">-->
      <!--      <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">-->
      <!--      <h3>John Shikuku</h3>-->
      <!--      <h4>Store Owner</h4>-->
      <!--      <div class="stars">-->
      <!--        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>-->
      <!--      </div>-->
      <!--      <p>-->
      <!--        <i class="bi bi-quote quote-icon-left"></i>-->
      <!--        <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>-->
      <!--        <i class="bi bi-quote quote-icon-right"></i>-->
      <!--      </p>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
      
      <!-- End testimonial item -->

      <!--<div class="swiper-slide">-->
      <!--  <div class="testimonial-wrap">-->
      <!--    <div class="testimonial-item">-->
      <!--      <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">-->
      <!--      <h3>Stephen Orwa</h3>-->
      <!--      <h4>Freelancer</h4>-->
      <!--      <div class="stars">-->
      <!--        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>-->
      <!--      </div>-->
      <!--      <p>-->
      <!--        <i class="bi bi-quote quote-icon-left"></i>-->
      <!--        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>-->
      <!--        <i class="bi bi-quote quote-icon-right"></i>-->
      <!--      </p>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
      <!-- End testimonial item -->



    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>

</section><!-- /Testimonials Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Portfolio</h2>
  <p>Have a look at our portfolio</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
      <li data-filter="*" class="filter-active">All</li>
      <li data-filter=".filter-app">Parties</li>
      <li data-filter=".filter-product">Live Bands</li>
      <li data-filter=".filter-branding">Crusades</li>
      <li data-filter=".filter-books">Cooperate Events</li>
    </ul><!-- End Portfolio Filters -->

    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Night Vigil Event</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Live Band Setup</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Felloship.</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->


      <!-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Books 1</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div> -->
      <!-- End Portfolio Item -->

      <!-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 2</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div> -->
      <!-- End Portfolio Item -->

      <!-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Product 2</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div> -->
      <!-- End Portfolio Item -->

      <!-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Branding 2</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div> -->
      <!-- End Portfolio Item -->

      <!-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Books 2</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div> -->
      <!-- End Portfolio Item -->
<!-- 
      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div> -->
      <!-- End Portfolio Item -->

      <!-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Product 3</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div> -->
      <!-- End Portfolio Item -->

      <!-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
        <div class="portfolio-content h-100">
          <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Branding 3</h4>
            <p>Lorem ipsum, dolor sit amet consectetur</p>
            <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div> -->
      <!-- End Portfolio Item -->

    
      <!-- End Portfolio Item -->

    </div><!-- End Portfolio Container -->

  </div>

</div>

</section><!-- /Portfolio Section -->




<?php 
include "footer.php"
?>