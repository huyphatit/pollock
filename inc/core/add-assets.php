<?php 

add_action('wp_enqueue_scripts', 'create_assets_scripts');
if (!function_exists('create_assets_scripts')) {

    function create_assets_scripts() {

 
        // wp_enqueue_style('aos', BLUE_VENDOR . '/aos/aos.css', array(), null);
        wp_enqueue_style('bootstrap-reboot', BLUE_VENDOR . '/bootstrap/css/bootstrap.min.css', array(), null);
        wp_enqueue_style('bootstrap-icons', BLUE_VENDOR . '/bootstrap-icons/bootstrap-icons.css', array(), null);
        wp_enqueue_style('glightbox', BLUE_VENDOR . '/glightbox/css/glightbox.min.css', array(), null);
        wp_enqueue_style('remixicon', BLUE_VENDOR . '/remixicon/remixicon.css', array(), null);
        wp_enqueue_style('swiper', BLUE_VENDOR . '/swiper/swiper-bundle.min.css', array(), null);
        wp_enqueue_style('pollock-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
        wp_enqueue_style('pollock-theme', BLUE_CSS . '/style.css', array(), null);


        $deps = array('jquery');
        wp_enqueue_script('jquery');

        wp_enqueue_script('purecounter_vanilla', BLUE_VENDOR . '/purecounter/purecounter_vanilla.js', $deps, '', true);
        // wp_enqueue_script('aos-js', BLUE_VENDOR . '/aos/aos.js', $deps, '', true);
        wp_enqueue_script('bootstrap-js', BLUE_VENDOR . '/bootstrap/js/bootstrap.bundle.min.js', $deps, '', true);
        wp_enqueue_script('glightbox-js', BLUE_VENDOR . '/glightbox/js/glightbox.min.js', $deps, '', true);
        wp_enqueue_script('isotope-js', BLUE_VENDOR . '/isotope-layout/isotope.pkgd.min.js', $deps, '', true);
        wp_enqueue_script('swiper-js', BLUE_VENDOR . '/swiper/swiper-bundle.min.js', $deps, '', true);

        wp_enqueue_script('validate-js', BLUE_VENDOR . '/php-email-form/validate.js', '', '', true);
        wp_enqueue_script('main-js', BLUE_JS . '/main.js', $deps, '', true);

    }

}