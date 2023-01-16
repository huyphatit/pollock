<?php
$group_right = get_field('group_right') ? get_field('group_right') : '';
$title = get_field('title') ? get_field('title') : '';
$des = get_field('des') ? get_field('des') : '';
$group_right = get_field('group_right') ? get_field('group_right') : '';

?>
<section id="onfocus" class="onfocus about">
  <div class="container aos-init aos-animate" data-aos="fade-up">
    <div class="row gx-0">
      <div class="col-lg-5 ">
        <div class="content d-flex flex-column justify-content-center h-100">
          <h3><?php echo $title; ?></h3>
          <p class="">
            <?php echo $des; ?>
          </p>
          <div class="form-project">
            <form action="" method="post">
              <input type="email" placeholder="Enter Your Email" name="email"><input type="submit" value="Submit">
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6 offset-lg-1">

        <div class="img-about position-relative video-play">
          <?php if ($group_right) : ?>
            <a href="<?php echo $group_right['link']; ?>" class="portfolio-lightbox play-btn"></a>
            <img src="<?php echo $group_right['image']; ?>" class="img-fluid" alt="">
            <div class="triangle"></div>
            <div class="rectangle">
              <p class="count-up"><?php echo $group_right['number']; ?></p>
              <p class="text-up"><?php echo $group_right['text']; ?></p>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>