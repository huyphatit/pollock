  <?php 
  $title = get_field('title') ? get_field('title') : '';
  $description = get_field('description') ? get_field('description') : '';
  $link = get_field('link') ? get_field('link') : '';
  $picture = get_field('picture') ? get_field('picture') : '';

  ?>
  
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-5 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up"><?php echo $title; ?></h2>
          <span data-aos="fade-up" class="text"><?php echo $description; ?></span>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="<?php echo $link; ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Discover Now</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-7 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?php echo $picture; ?>" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>