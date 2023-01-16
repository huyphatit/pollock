<?php
get_header();
the_post();
$post_id = get_the_ID();
?>
<main id="main" class="main">
  <div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-10 col-xl-10 col-xxl-10 offset-md-1 offset-lg-1 offset-xl-1 offset-xxl-1">
                <div class="space"></div>
                <article class="vc-article">
                    <h2 class="vc-headline--primary"><?php the_title(); ?></h2>
                    <?php if (has_post_thumbnail()) : ?>
                            <div class="vc-card__avatar-blog position-relative"><?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => '')); ?></div>
                    <?php endif; ?>
                    <div class="vc-article__content">
                        <?php the_content(); ?>
                    </div>
                   
                </article>
            </div>
        </div>
    </div>
    </div>
</main><!-- #main -->
<?php
get_footer();
