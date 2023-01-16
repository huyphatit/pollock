<?php
$title_section = get_field('title_section') ? get_field('title_section') : '';
$description_section = get_field('description_section') ? get_field('description_section') : '';
$group_left = get_field('group_left') ? get_field('group_left') : '';
$title = get_field('title') ? get_field('title') : '';
$des = get_field('des') ? get_field('des') : '';

$group_right = get_field('group_right') ? get_field('group_right') : '';

?>

<section id="about" class="about">

  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h2 class="section-title"><?php echo $title_section; ?></h2>
      <p class="section-description"><?php echo $description_section; ?></p>
    </header>
    <div class="row gx-0">
      <div class="col-lg-6 ">
        <?php if ($group_left) : ?>
          <div class="img-about position-relative">
            <img src="<?php echo $group_left['image']; ?>" class="img-fluid" alt="">
            <div class="circle"></div>
            <div class="rectangle">
              <p class="count-up"><?php echo $group_left['number']; ?></p>
              <p class="text-up"><?php echo $group_left['text']; ?></p>
            </div>
          </div>
        <?php endif; ?>

      </div>
      <div class="col-lg-5 offset-lg-1">
        <h3 class="section-title"><?php echo $title; ?></h3>
        <p class="section-description"><?php echo $des; ?></p>
        <?php if (have_rows('group_right')) : ?>
          <div class="row">
            <?php while (have_rows('group_right')) : the_row();
              $icon = get_sub_field('icon');
              $title = get_sub_field('title');
              $des = get_sub_field('des');
              $link = get_sub_field('link');
            ?>
              <div class="col-lg-6">
                <div class="box">
                  <div class="wrap-icon">
                    <!-- <i class="ri-pencil-fill"></i> -->
                    <img src="<?php echo $icon; ?>" class="img-fluid" alt="">
                  </div>
                  <h3><?php echo $title; ?></h3>
                  <p class="text-box"><?php echo $des; ?></p>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>

    </div>

  </div>

</section><!-- End About Section -->