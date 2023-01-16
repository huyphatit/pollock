<?php

// exit if accessed directly
if (!defined('ABSPATH'))
    exit;


// check if class already exists
if (!class_exists('acf_plugin_fields_type')) {

    class acf_plugin_fields_type {

        // vars
        public $settings;

        /*
         *  __construct
         *
         *  This function will setup the class functionality
         *
         *  @type	function
         *  @since	1.0.0
         *
         *  @param	void
         *  @return	void
         */

        function __construct() {

            // settings
            // - these will be passed into the field class.
            $this->settings = array(
                'version' => '1.0.0',
                'url' => plugin_dir_url(__FILE__),
                'path' => plugin_dir_path(__FILE__)
            );


            // include field
            add_action('acf/include_field_types', array($this, 'include_field')); // v5
            add_action('acf/register_fields', array($this, 'include_field')); // v4
        }

        /*
         *  include_field
         *
         *  This function will include the field type class
         *
         *  @type	function
         *  @since	1.0.0
         *
         *  @param	$version (int) major ACF version. Defaults to false
         *  @return	void
         */

        function include_field($version = false) {
            require_once('fields/align-text.php');
//            require_once('fields/columns.php');
        }

    }

    // initialize
    new acf_plugin_fields_type();
}
