<?php 
$num = get_field('number') ? get_field('number') : 3;
?>
<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2 class="section-title">We will keep you up to date and give you tips to <br class="d-sm-none d-md-block"> help you optimise your company</h2>
    </header>

    <div class="row">
      <?php $postquery = new WP_Query(array('posts_per_page' => $num));
      if ($postquery->have_posts()) :
        while ($postquery->have_posts()) : $postquery->the_post();
     
          $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'thumbnail' );
     
      ?>
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="<?php echo $url; ?>" class="img-fluid" alt=""></div>
              <span class="post-date"><?php echo get_the_date( 'F j, Y'); ?></span>
              <h3 class="post-title"><?php the_title();  ?></h3>
              <a href="<?php the_permalink(); ?>" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      

    </div>

  </div>

</section><!-- End Recent Blog Posts Section -->
