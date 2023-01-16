<?php

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

class Blue_Nav_Walker extends Walker_Nav_Menu
{

    private $cnt = 1, $current_id = 0;

    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);

        // Default class.
        $classes = array('sub-menu');
        $mega_menu = get_field('menu_mega', $this->current_id);
        if ($mega_menu) {
            $classes[] = 'mega';
        }
        /**
         * Filters the CSS class(es) applied to a menu list element.
         *
         * @since 4.8.0
         *
         * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
         * @param stdClass $args    An object of `wp_nav_menu()` arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
        $class_names = implode(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= "{$n}{$indent}<ul$class_names>{$n}";
    }

    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ($depth) ? str_repeat($t, $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        /**
         * Filters the arguments for a single nav menu item.
         *
         * @since 4.4.0
         *
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param WP_Post  $item  Menu item data object.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $args = apply_filters('nav_menu_item_args', $args, $item, $depth);

        /**
         * Filters the CSS classes applied to a menu item's list item element.
         *
         * @since 3.0.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param string[] $classes Array of the CSS classes that are applied to the menu item's `<li>` element.
         * @param WP_Post  $item    The current menu item.
         * @param stdClass $args    An object of wp_nav_menu() arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
        if (is_single()) {
            $post_type = get_post_type();
            $object = get_post_type_object($post_type);
            $post_type_slug = ($post_type == 'post' ? 'news' : $object->rewrite['slug']);
            if (strpos($item->url, $post_type_slug)) { //match slug and url active menu
                $classes[] = 'current-menu-item';
            }
        }
        $class_names = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        /**
         * Filters the ID applied to a menu item's list item element.
         *
         * @since 3.0.1
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
         * @param WP_Post  $item    The current menu item.
         * @param stdClass $args    An object of wp_nav_menu() arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $atts = array();
        $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        if ('_blank' === $item->target && empty($item->xfn)) {
            $atts['rel'] = 'noopener';
        } else {
            $atts['rel'] = $item->xfn;
        }
        $atts['href'] = !empty($item->url) ? $item->url : '';
        $atts['aria-current'] = $item->current ? 'page' : '';

        /**
         * Filters the HTML attributes applied to a menu item's anchor element.
         *
         * @since 3.6.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array $atts {
         *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
         *
         *     @type string $title        Title attribute.
         *     @type string $target       Target attribute.
         *     @type string $rel          The rel attribute.
         *     @type string $href         The href attribute.
         *     @type string $aria-current The aria-current attribute.
         * }
         * @param WP_Post  $item  The current menu item.
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (is_scalar($value) && '' !== $value && false !== $value) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        /** This filter is documented in wp-includes/post-template.php */
        $title = apply_filters('the_title', $item->title, $item->ID);

        /**
         * Filters a menu item's title.
         *
         * @since 4.4.0
         *
         * @param string   $title The menu item's title.
         * @param WP_Post  $item  The current menu item.
         * @param stdClass $args  An object of wp_nav_menu() arguments.
         * @param int      $depth Depth of menu item. Used for padding.
         */
        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);
        // If item has_children add atts to a.
        if ($args->walker->has_children && 0 === $depth) {
            if ($args->theme_location == 'des-menu') {
                $args->link_after = '<svg class="vc-icon ml-2"><use xlink:href="' . SVG_ICONS . '#i-arrow-down" /></svg>';
            } else {
                $args->link_after = '<i class="expand jsExpand"></i>';
            }
        } else {
            $args->link_after = '';
        }

        $mega_image = get_field('menu_mega_image', $item->ID);
        if ($mega_image) {
            $args->link_before = '<span class="position-relative d-inline-block"><img class="position-absolute" src="' . wp_get_attachment_image_url($mega_image, 'medium') . '" alt="menu image" /></span>';
        }

        $this->current_id = $item->ID;
        $link_title = ($item->attr_title ? '<strong>' : '') . $title . ($item->attr_title ? '<small class="d-block fw-normal">' . $item->attr_title . '</small></strong>' : '');
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $link_title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        /**
         * Filters a menu item's starting output.
         *
         * The menu item's starting output only includes `$args->before`, the opening `<a>`,
         * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
         * no filter for modifying the opening and closing `<li>` for a menu item.
         *
         * @since 3.0.0
         *
         * @param string   $item_output The menu item's starting HTML output.
         * @param WP_Post  $item        Menu item data object.
         * @param int      $depth       Depth of menu item. Used for padding.
         * @param stdClass $args        An object of wp_nav_menu() arguments.
         */
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    function display_element($element, &$children_elements, $max_depth, $depth = 0,  $args = array(), &$output)
    {
        parent::display_element($element, $children_elements, $max_depth, $depth,  $args, $output);
        $this->cnt++;
        if ($this->cnt > $args[0]->menu->count) {
            $form = '<form role="search" method="get" id="searchform" class="vl-form__search" action="' . home_url('/') . '" >
            <div class="custom-form"><label class="screen-reader-text" for="s">' . __('Search:') . '</label>
            <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search..." />
            <button class="position-absolute" type="submit">Submit</button>
          </div>
          </form>';

            $output .= '<li class="nav-icons nav-search position-relative">
            <a class="vl-header__search jsCallSearch" ><i class="ri-search-line"></i></a>
            <div class="vl-popup__box1 d-inline-flex justify-content-center">
            <div class="vl-form--search">' . $form . '</div>
        </div></li>';
            $output .= '<li class="nav-icons nav-search position-relative">
            <a class="vl-header__cart jscart" ><i class="ri-shopping-cart-line"></i></a></li>';
            $output .= '<a class="getstarted scrollto" href="#about">Sign Up</a>';
        }
    }
}
