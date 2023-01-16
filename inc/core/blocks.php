<?php

add_action('acf/init', 'add_gutenberg_blocks');

function add_gutenberg_blocks() {
    // Check function exists
    if (function_exists('acf_register_block')) {
        $blocks = array(
            array(
                'name' => 'blue-hero',
                'title' => __('Hero - Design-powered to fuel your goals', BLUE),
                'category' => 'formatting',
                'keywords' => array('hero', 'slider'),
                'render_callback' => 'blue_acf_block_render_callback'
            ),
            array(
                'name' => 'blue-experience',
                'title' => __('Experience - We offer the best experience', BLUE),
                'category' => 'formatting',
                'keywords' => array('experience', 'about experience'),
                'render_callback' => 'blue_acf_block_render_callback'
            ),

            array(
                'name' => 'blue-clients',
                'title' => __('Clients - Working with the most trusted technologies', BLUE),
                'category' => 'formatting',
                'keywords' => array('clients', 'logo client'),
                'render_callback' => 'blue_acf_block_render_callback'
            ),
            array(
                'name' => 'blue-about',
                'title' => __('About - Design and development across all platforms', BLUE),
                'category' => 'formatting',
                'keywords' => array('about', 'Design and development'),
                'render_callback' => 'blue_acf_block_render_callback'
            ),
            array(
                'name' => 'blue-testimonials',
                'title' => __('Testimonials - What our clients are saying about us', BLUE),
                'category' => 'formatting',
                'keywords' => array('testimonials', 'clients say'),
                'render_callback' => 'blue_acf_block_render_callback'
            ),
            array(
                'name' => 'blue-portfolio',
                'title' => __('Portfolio - Get inspired by our finest work', BLUE),
                'category' => 'formatting',
                'keywords' => array('portfolio', 'Get inspired'),
                'render_callback' => 'blue_acf_block_render_callback'
            ),
            array(
                'name' => 'blue-onfocus',
                'title' => __('About project - Ready to get started with your new project today? We are here to help!', BLUE),
                'category' => 'formatting',
                'keywords' => array('onfocus', 'Get inspired'),
                'render_callback' => 'blue_acf_block_render_callback'
            ),
            array(
                'name' => 'blue-counts',
                'title' => __('Counts - Happy Clients - Optimization Strategy - Increased Traffic', BLUE),
                'category' => 'formatting',
                'keywords' => array('counts'),
                'render_callback' => 'blue_acf_block_render_callback'
            ),
            array(
                'name' => 'blue-recent-blog-posts',
                'title' => __('Posts - We will keep you up to date and give you tips to help you optimise your company', BLUE),
                'category' => 'formatting',
                'keywords' => array('recent-blog-posts'),
                'render_callback' => 'blue_acf_block_render_callback'
            ),
            array(
                'name' => 'blue-footer-newsletter',
                'title' => __('Newsletter - We have helped brands of all kinds and businesses of every size grow their online revenue', BLUE),
                'category' => 'formatting',
                'keywords' => array('newsletter'),
                'render_callback' => 'blue_acf_block_render_callback'
            ),
            

        );
        foreach ($blocks as $block) {
            acf_register_block($block);
        }
    }
}

function blue_acf_block_render_callback($block) {
    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);
    // include a template part from within the "template-parts/block" folder
    if (file_exists(get_theme_file_path("/gutenberg/{$slug}.php"))) {
        include( get_theme_file_path("/gutenberg/{$slug}.php") );
    }
}
