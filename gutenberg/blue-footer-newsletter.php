<?php
$title = get_field('title') ? get_field('title') : '';
$des = get_field('des') ? get_field('des') : '';
$link = get_field('link') ? get_field('link') : '';


?>
<div class="footer-newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 text-center">
        <h2 class="section-title"><?php echo $title; ?></h2>
        <p class="section-description"><?php echo $des; ?></p>
      </div>
      <div class="col-lg-6">

        <div class="text-center text-lg-center">
          <a href="<?php echo $link; ?>" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Contact Us</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>