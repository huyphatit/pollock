<?php
$counts = get_field('counts') ? get_field('counts') : '';

?>
<!-- ======= Counts Section ======= -->
<?php if (have_rows('counts')) : ?>

  <section id="counts" class="counts count-bg">
    <div class="container" data-aos="fade-up">
      <div class="row gy-4">
        <?php while (have_rows('counts')) : the_row();
          $number = get_sub_field('number');
          $symbol = get_sub_field('symbol');
          $des = get_sub_field('des');
          $title = get_sub_field('title');
        ?>
          <div class="col-lg-4">
            <div class="info-box text-center">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $number; ?>" data-purecounter-duration="1" class="purecounter"></span> <span><?php echo $symbol; ?></span>
              <h3><?php echo $title; ?></h3>
              <p class="section-description"><?php echo $des; ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section><!-- End Counts Section -->
<?php endif; ?>