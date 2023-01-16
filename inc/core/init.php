<?php

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

require_once dirname(__FILE__) . '/add-assets.php';    // Assets
require_once dirname(__FILE__) . '/add-functions.php'; // Functions
// require_once dirname(__FILE__) . '/add-duplicate.php'; // Duplicate post
require_once dirname(__FILE__) . '/theme-setting.php'; // Theme setting
// //require_once dirname(__FILE__) . '/dynamic-icons.php'; // Icon
require_once dirname(__FILE__) . '/blocks.php';        // Gutenberg blocks
require_once dirname(__FILE__) . '/menu-walker.php'; // menu