<?php

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

defined('BLUE') || define('BLUE', 'BLUE');
defined('BLUE_DIR') || define('BLUE_DIR', get_template_directory());
defined('BLUE_URI') || define('BLUE_URI', get_template_directory_uri());
defined('BLUE_INC') || define('BLUE_INC', BLUE_DIR . '/inc');
defined('BLUE_ASS') || define('BLUE_ASS', BLUE_URI . '/assets');

defined('BLUE_CSS') || define('BLUE_CSS', BLUE_ASS . '/css');
defined('BLUE_JS') || define('BLUE_JS', BLUE_ASS . '/js');
defined('BLUE_VENDOR') || define('BLUE_VENDOR', BLUE_ASS . '/vendor');
defined('BLUE_IMG') || define('BLUE_IMG', BLUE_ASS . '/img');


defined('EXCERPT_LENGTH') || define('EXCERPT_LENGTH', 30);
defined('POSTS_PER_PAGE') || define('POSTS_PER_PAGE', 12);
defined('PODCAST_PER_PAGE') || define('PODCAST_PER_PAGE', 12);
defined('RELATED_POSTS') || define('RELATED_POSTS', 3);

defined('IMG_WIDTHxHEIGHT') || define('IMG_WIDTHxHEIGHT', 'IMG_WIDTHxHEIGHT'); // Home pj
