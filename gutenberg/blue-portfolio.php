<?php
$title_section = get_field('title_section') ? get_field('title_section') : '';
$pictures = get_field('pictures') ? get_field('pictures') : '';

?>
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">


  <div class="row" data-aos="fade-up">
    <div class="col-lg-12 d-flex justify-content-center">
      <h2 class="section-title"><?php echo $title_section; ?></h2>
    </div>
  </div>
  <?php if (have_rows('pictures')) : ?>
    <div class="row portfolio-container" data-aos="fade-up">
      <?php while (have_rows('pictures')) : the_row();
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $des = get_sub_field('des');
        $link = get_sub_field('link');
      ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="<?php echo $image; ?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $title; ?></h4>
            <p><?php echo $des; ?></p>
            <a href="<?php echo $image; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo $title; ?>"><i class="ri-add-line"></i></a>
            <a href="<?php echo $link; ?>" class="details-link" title="More Details"><i class="ri-links-line"></i></a>
          </div>
        </div>
      <?php endwhile; ?>

    </div>
  <?php endif; ?>
  <div class="row">
    <div class="col-lg-12">
      <div class="text-center text-lg-center mt-3">
        <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
          <span>View Our Work</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>

</section><!-- End Portfolio Section -->