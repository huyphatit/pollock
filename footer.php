<?php
$logo = get_theme_option('footer');
$footer_links = get_theme_option('footer_links');
$footer_copyright = get_theme_option('footer_copyright');
// var_dump($footer_links);
?>
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-2 col-6 footer-logo">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="<?php echo $logo; ?>" alt="">
            <span>Pollock</span>
          </a>
        </div>
        <div class="col-lg-2 col-6 footer-links">
          <?php $name = wp_get_nav_menu_name('footer-1'); ?>
          <?php if ($name) : ?>
            <h4><?php echo wp_get_nav_menu_name('footer-1') ?></h4>
          <?php endif; ?>
          <ul>
            <?php
            $menu_items = blue_get_menu_items('footer-1');
            if (isset($menu_items)) :
              foreach ((array) $menu_items as $key => $menu_item) :

            ?>
                <li> <a href="#"><?php echo $menu_item->post_title; ?></a></li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <?php $name = wp_get_nav_menu_name('footer-2'); ?>
          <?php if ($name) : ?>
            <h4><?php echo wp_get_nav_menu_name('footer-2') ?></h4>
          <?php endif; ?>
          <ul>
            <?php
            $menu_items = blue_get_menu_items('footer-2');
            if (isset($menu_items)) :
              foreach ((array) $menu_items as $key => $menu_item) :

            ?>
                <li> <a href="#"><?php echo $menu_item->post_title; ?></a></li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <?php $name = wp_get_nav_menu_name('footer-3'); ?>
          <?php if ($name) : ?>
            <h4><?php echo wp_get_nav_menu_name('footer-3') ?></h4>
          <?php endif; ?>
          <ul>
            <?php
            $menu_items = blue_get_menu_items('footer-3');
            if (isset($menu_items)) :
              foreach ((array) $menu_items as $key => $menu_item) :

            ?>
                <li> <a href="#"><?php echo $menu_item->post_title; ?></a></li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </div>


        <div class="col-lg-4 col-md-12 footer-contact text-md-start">
          <h4>Newsletter</h4>
          <div class="content d-flex flex-column h-100">
            <p class="">
              Subscribe to our newsletter to keep up to date on our marketing, website, design services, and tips.
            </p>
            <div class="form-newsletter">
              <form action="" method="post">
                <input type="email" placeholder="Enter Your Email" name="email"><input type="submit" value="Submit">
              </form>
            </div>
            <p class="mt-3">
              We hate spam as much as you do. We will never, ever send you such emails.
            </p>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row footer-bottom">
      <div class="copyright col-lg-6">
        <?php echo $footer_copyright; ?>
      </div>
      <?php if ($footer_links) : ?>
        <div class="col-lg-6">
          <div class="social-links ">
            <?php foreach($footer_links as $link):
// var_dump($link);
            ?>
              <a href="<?php echo $link['url']; ?>" class="twitter"><img src="<?php echo $link['image']; ?>" class="img-social" alt=""></a>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>

  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<?php wp_footer(); ?>
</body>

</html>