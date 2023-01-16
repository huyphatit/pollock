<?php
$title_section = get_field('title_section') ? get_field('title_section') : '';
$description_section = get_field('description_section') ? get_field('description_section') : '';
$clients = get_field('clients') ? get_field('clients') : '';

?>
<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2 class="section-title"><?php echo $title_section; ?></h2>
      <p class="section-description"><?php echo $description_section; ?></p>
    </header>
    <div class="row">
      <div class="co-lg-10 offset-lg-2 position-relative">
        <div class="parallelogram"></div>
        <div class="btn-slide">
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="testimonials-slider swiper position-relative" data-aos="fade-up" data-aos-delay="200">
          <?php if (have_rows('clients')) : ?>
            <div class="swiper-wrapper">
              <?php while (have_rows('clients')) : the_row();
                $icon = get_sub_field('icon');
                $name = get_sub_field('name');
                $position = get_sub_field('position');
                $review = get_sub_field('review');
                $comment = get_sub_field('comment');

              ?>
                <div class="swiper-slide">
                  <div class="testimonial-item">

                    <div class="profile mt-auto">
                      <img src="<?php echo $icon; ?>" class="testimonial-img" alt="">
                      <h3><?php echo $name; ?></h3>
                      <h4><?php echo $position; ?></h4>
                      <p class="review"><?php echo $review; ?></p>
                    </div>
                    <p>
                    <?php echo $comment; ?>
                    </p>
                  </div>
                </div><!-- End testimonial item -->
              <?php endwhile; ?>

            </div>
          <?php endif; ?>

        </div>

      </div>
    </div>


  </div>

</section><!-- End Testimonials Section -->