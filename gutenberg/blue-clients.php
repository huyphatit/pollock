<?php
$logos = get_field('logos') ? get_field('logos') : '';

?>
<?php if (have_rows('logos')) : ?>

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p class="section-description">Working with the most trusted technologies</p>
      </header>

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <?php while (have_rows('logos')) : the_row();
            $icon = get_sub_field('icon');
          ?>
            <div class="swiper-slide"><img src="<?php echo $icon; ?>" class="img-fluid" alt=""></div>
          <?php endwhile; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

  </section><!-- End Clients Section -->
<?php endif; ?>