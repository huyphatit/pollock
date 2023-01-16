<?php

add_action('after_setup_theme', 'theme_setup');
if (!function_exists('theme_setup')) {

    function theme_setup() {
        // ==================================================
        // Theme support
        // ==================================================
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('responsive-embeds');
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

        //editor gutenberg
        add_theme_support('custom-spacing');
        add_theme_support('align-wide');
        add_theme_support('wp-block-styles');
        // ==================================================
        // Nav menu
        // ==================================================
        register_nav_menu('des-menu', 'Menu Desktop');
        register_nav_menu('mob-menu', 'Menu Mobile');

        register_nav_menu('footer-1', 'Company');
        register_nav_menu('footer-2', 'Services');
        register_nav_menu('footer-3', 'Contact');

    }

}
function blue_get_menu_items($menu_name){
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        return wp_get_nav_menu_items($menu->term_id);
    }
}


/*
 * Get theme option
 */

 function get_theme_option($opt = '')
 {
     if (class_exists('ACF')) {
         return get_field('sys_' . $opt, 'option') ? get_field('sys_' . $opt, 'option') : '';
     }
     return;
 }


require_once trailingslashit(get_template_directory()) . 'inc/init.php';

// ==================================================
// Blue Otter Debugger
// ==================================================
if (!function_exists('blue_log')) {

    /**
     * Write log to log file
     *
     * @param string|array|object $log
     */
    function blue_log($log, $file = '', $line = '') {
        if (true === WP_DEBUG) {
            if (!empty($file) && !empty($line)) {

                if (is_array($log) || is_object($log)) {
                    error_log($file . "(" . $line . "):");
                    error_log(print_r($log, true));
                } else {
                    error_log($file . "(" . $line . "): " . $log);
                }
            } else {

                if (is_array($log) || is_object($log)) {
                    error_log(print_r($log, true));
                } else {
                    error_log($log);
                }
            }
        }
    }

}