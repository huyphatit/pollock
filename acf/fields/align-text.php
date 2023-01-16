<?php

// exit if accessed directly
if (!defined('ABSPATH'))
    exit;


// check if class already exists
if (!class_exists('acf_field_post_types')) {

    class acf_field_choices extends acf_field {

        function __construct($settings) {

            /*
             *  name (string) Single word, no spaces. Underscores allowed
             */

            $this->name = 'align_text';


            /*
             *  label (string) Multiple words, can include spaces, visible when selecting a field type
             */

            $this->label = 'Text Align';


            /*
             *  category (string) basic | content | choice | relational | jquery | layout | CUSTOM GROUP NAME
             */

            $this->category = 'choice';

            /*
             *  l10n (array) Array of strings that are used in JavaScript. This allows JS strings to be translated in PHP and loaded via:
             *  var message = acf._e('FIELD_NAME', 'error');
             */

            $this->l10n = array(
                'error' => __('Lỗi ! vui lòng chọn phiên bản mới hơn', 'story'),
            );


            /*
             *  settings (array) Store plugin settings (url, path, version) as a reference for later use with assets
             */

            $this->settings = $settings;
            parent::__construct();
        }

        /*
         *  render_field_settings()
         *
         *  Create extra settings for your field. These are visible when editing a field
         *
         *  @type	action
         *  @since	3.6
         *  @date	23/01/13
         *
         *  @param	$field (array) the $field being edited
         *  @return	n/a
         */

        function render_field_settings($field) {
            
        }

        function render_field($field) {
            $field['type'] = 'select';
            $field['ui'] = 1;
            $field['choices'] = $this->get_align_choices();
            echo "<div class='acf-field acf-field-select' data-name='{$field['label']}' data-type='select' data-key='{$field['key']}'>";
            acf_render_field($field);
            echo '</div>';
        }

        function get_align_choices() {
            $choices = array(
                'left' => __('align left', BLUE),
                'right' => __('Align Right', BLUE),
                'center' => __('Aign Center', BLUE)
            );
            return $choices;
        }

    }

    // initialize
    new acf_field_choices($this->settings);
}
