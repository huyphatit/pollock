<?php
  $favicon = get_theme_option('favicon');
  $logo = get_theme_option('logo');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FlexStart Bootstrap Template - Index</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $favicon; ?>" rel="icon">
  <link href="<?php echo $favicon; ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Outfit:wght@500;600;700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->

  <?php wp_head(); ?>
  <?php if (is_user_logged_in() && is_admin_bar_showing()) : ?>
    <style type="text/css">
      .header {
        padding: 40px 0;
      }

      .header.header-scrolled {
        margin-top: 20px;
      }

      @media screen and (max-width: 600px) {}


      @media only screen and (min-width: 1200.02px) {}

      @media only screen and (max-width: 1199.98px) {}
    </style>
  <?php endif; ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?php echo site_url(); ?>" class="logo d-flex align-items-center">
        <img src="<?php echo $logo; ?>" alt="">
        <span>Pollock</span>
      </a>

      <nav id="navbar" class="navbar">
        <?php
        //desktop menu
        if (has_nav_menu('des-menu')) {
          $args = array(
            'theme_location' => 'des-menu',
            'container' => false,
            'walker' => new Blue_Nav_Walker()
          );
          wp_nav_menu($args);
        }

        ?>


        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->