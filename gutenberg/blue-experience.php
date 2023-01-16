<?php
$title_section = get_field('title_section') ? get_field('title_section') : '';
$description_section = get_field('description_section') ? get_field('description_section') : '';
$group_left = get_field('group_left') ? get_field('group_left') : '';
$group_right_1 = get_field('group_right_1') ? get_field('group_right_1') : '';
$group_right_2 = get_field('group_right_2') ? get_field('group_right_2') : '';
$group_right_3 = get_field('group_right_3') ? get_field('group_right_3') : '';
?>
<!-- ======= About Section ======= -->
<section id="about-1" class="about about-1">

  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h2 class="section-title"><?php echo $title_section; ?></h2>
      <p class="section-description"><?php echo $description_section; ?></p>
    </header>
    <div class="row gx-0">

      <div class="col-lg-3 offset-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <?php if ($group_left) : ?>
          <div class="content">
            <h2><?php echo $group_left['title']; ?></h2>
            <p>
              <?php echo $group_left['des']; ?>
            </p>
            <div class="text-center text-lg-start position-relative">
              <a href="<?php echo $group_left['link']; ?>" class="btn-we-do d-inline-flex align-items-center justify-content-center align-self-center">
                <span>What we do</span>
                <i class="bi bi-arrow-right"></i>
              </a>
              <div class="parallelogram"></div>
            </div>
          </div>
        <?php endif; ?>
      </div>

      <div class="col-lg-8 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <div class="row">
          <div class="col-lg-5 offset-lg-1 about-middle">
            <?php if ($group_right_1) : ?>
              <div class="box img-about position-relative">
                <div class="circle"></div>
                <img src="<?php echo $group_right_1['icon']; ?>" class="img-fluid" alt="">
                <h3><?php echo $group_right_1['title']; ?></h3>
                <p><?php echo $group_right_1['des']; ?></p>
              </div>
            <?php endif; ?>
          </div>
          <div class="col-lg-6">
            <div class="special">
            <?php if ($group_right_2) : ?>
              <div class="box">
                <img src="<?php echo $group_right_2['icon']; ?>" class="img-fluid" alt="">
                <h3><?php echo $group_right_2['title']; ?></h3>
                <p><?php echo $group_right_2['des']; ?></p>
              </div>
              <?php endif; ?>
              <?php if ($group_right_3) : ?>

              <div class="box box-3">
                <h3><?php echo $group_right_3['title']; ?></h3>
                <p><?php echo $group_right_3['des']; ?></p>
                <div class="text-center text-lg-start">
                  <a href="<?php echo $group_right_3['link']; ?>" class="btn-we-do d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Read more</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>


</section><!-- End About Section -->