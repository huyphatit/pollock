<?php

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

if (!class_exists('ACF'))
    return;
if (blue_get_current_user_role() != "administrator")
    return;

// ==================================================
// Add theme setting page
// ==================================================
acf_add_options_page(array(
    'page_title' => 'Theme  setting',
    'menu_title' => 'Theme  setting',
    'menu_slug' => 'theme-setting',
    'capability' => 'edit_posts',
    'redirect' => true,
    'position' => 2,
));

acf_add_options_sub_page(array(
    'page_title' => 'Genaral setting',
    'menu_title' => 'Genaral setting',
    'menu_slug' => 'general-setting',
    'parent_slug' => 'theme-setting',
));


acf_add_options_sub_page(array(
    'page_title' => 'Footer',
    'menu_title' => 'Footer',
    'menu_slug' => 'footer-setting',
    'parent_slug' => 'theme-setting',
));


acf_add_options_sub_page(array(
    'page_title' => 'Embeb setting',
    'menu_title' => 'Embeb setting',
    'menu_slug' => 'embed-setting',
    'parent_slug' => 'theme-setting',
));
