<?php
add_filter('wp_nav_menu_objects', 'custom_menu_icon_url', 10, 2);

function custom_menu_icon_url($items, $args)
{
    foreach ($items as $item) {
        $custom_icon_url = get_post_meta($item->ID, 'menu-item-icon-url', true);
        if (!empty($custom_icon_url)) {
            // Output the value for testing purposes
            echo 'Icon URL for menu item "' . $item->title . '": ' . $custom_icon_url . '<br>';
        }
    }
    return $items;
}

// setup navigation automatically
add_action('load-nav-menus.php', 'auto_nav_creation_primary');
function auto_nav_creation_primary() {

    $menu_name = 'JLMAYORGA_MENU_HOME_NAVIGATION';


    $menu = null;
    $menu = wp_get_nav_menu_object($menu_name);

    if (!$menu) {
        $menu_id = wp_create_nav_menu($menu_name);
        $menu = get_term_by('name', $menu_name, 'nav_menu');

        $menu_term_id = $menu->term_id;
        $menu_item_db_id = 0;
        doCreateMenuItem($menu_term_id, $menu_item_db_id);
    }


}


function doCreateMenuItem($menu_term_id, $menu_item_db_id){
    wp_update_nav_menu_item(
        $menu_term_id,
        $menu_item_db_id,
        array(
            'menu-item-title' =>  __('Me'),
            'menu-item-classes' => 'jlmayorga__nav_item jlmayorga__nav_item--me',
            'menu-item-url' => '#',
            'menu-item-type' => 'custom',
            'menu-item-status' => 'publish'
        )
    );
    wp_update_nav_menu_item(
        $menu_term_id,
        $menu_item_db_id,
        array(
            'menu-item-title' =>  __('Blog'),
            'menu-item-classes' => 'jlmayorga__nav_item jlmayorga__nav_item--blog',
            'menu-item-url' => '#',
            'menu-item-type' => 'custom',
            'menu-item-status' => 'publish'
        )
    );
    wp_update_nav_menu_item(
        $menu_term_id,
        $menu_item_db_id,
        array(
            'menu-item-title' =>  __('Projects'),
            'menu-item-classes' => 'jlmayorga__nav_item jlmayorga__nav_item--projects',
            'menu-item-url' => '#',
            'menu-item-type' => 'custom',
            'menu-item-status' => 'publish'
        )
    );
    wp_update_nav_menu_item(
        $menu_term_id,
        $menu_item_db_id,
        array(
            'menu-item-title' =>  __('Tutorials'),
            'menu-item-classes' => 'jlmayorga__nav_item jlmayorga__nav_item--tutorials',
            'menu-item-url' => '#',
            'menu-item-type' => 'custom',
            'menu-item-status' => 'publish'
        )
    );
    wp_update_nav_menu_item(
        $menu_term_id,
        $menu_item_db_id,
        array(
            'menu-item-title' =>  __('Courses'),
            'menu-item-classes' => 'jlmayorga__nav_item jlmayorga__nav_item--courses',
            'menu-item-url' => '#',
            'menu-item-type' => 'custom',
            'menu-item-status' => 'publish'
        )
    );
    wp_update_nav_menu_item(
        $menu_term_id,
        $menu_item_db_id,
        array(
            'menu-item-title' =>  __('Research'),
            'menu-item-classes' => 'jlmayorga__nav_item jlmayorga__nav_item--research',
            'menu-item-url' => '#',
            'menu-item-type' => 'custom',
            'menu-item-status' => 'publish'
        )
    );
}

function auto_nav_creation_primary2()
{

    $name = 'JLMAYORGA_MENU_HomeNavigation';

    $menu_exists = wp_get_nav_menu_object($name);
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($name);
        $menu = get_term_by('name', $name, 'nav_menu');

        $menu_term_id = $menu->term_id;
        $menu_item_db_id = 0;

        wp_update_nav_menu_item(
            $menu_term_id,
            $menu_item_db_id,
            array(
                'menu-item-title' =>  __('Me'),
                'menu-item-classes' => 'topics-dropdown',
                'menu-item-url' => '#',
                'menu-item-icon-url' => 'https://myimage.com/image.jpg',
                'menu-item-type' => 'custom',
                'menu-item-status' => 'publish'
            )
        );

        wp_update_nav_menu_item(
            $menu_term_id,
            $menu_item_db_id,
            array(
                'menu-item-title' =>  __('Blog'),
                'menu-item-classes' => 'topics-dropdown',
                'menu-item-url' => '#',
                'menu-item-type' => 'custom',
                'menu-item-status' => 'publish'
            )
        );

        wp_update_nav_menu_item(
            $menu_term_id,
            $menu_item_db_id,
            array(
                'menu-item-title' =>  __('Projects'),
                'menu-item-classes' => 'topics-dropdown',
                'menu-item-url' => '#',
                'menu-item-type' => 'custom',
                'menu-item-status' => 'publish'
            )
        );

        wp_update_nav_menu_item(
            $menu_term_id,
            $menu_item_db_id,
            array(
                'menu-item-title' =>  __('Tutorials'),
                'menu-item-classes' => 'topics-dropdown',
                'menu-item-url' => '#',
                'menu-item-type' => 'custom',
                'menu-item-status' => 'publish'
            )
        );


        wp_update_nav_menu_item(
            $menu_term_id,
            $menu_item_db_id,
            array(
                'menu-item-title' =>  __('Courses'),
                'menu-item-classes' => 'topics-dropdown',
                'menu-item-url' => '#',
                'menu-item-type' => 'custom',
                'menu-item-status' => 'publish'
            )
        );

        wp_update_nav_menu_item(
            $menu_term_id,
            $menu_item_db_id,
            array(
                'menu-item-title' =>  __('Research'),
                'menu-item-classes' => 'topics-dropdown',
                'menu-item-url' => '#',
                'menu-item-type' => 'custom',
                'menu-item-status' => 'publish'
            )
        );
    }
}


class Custom_Icon_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . '>';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target)     ? $item->target     : '';
        $atts['rel']    = !empty($item->xfn)        ? $item->xfn        : '';
        $atts['href']   = !empty($item->url)        ? $item->url        : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';

        // Check if custom field 'menu-item-icon-url' exists and use it if available
        $custom_icon_url = get_post_meta($item->ID, 'menu-item-icon-url', true);
        if (!empty($custom_icon_url)) {
            $item_output .= '<img src="' . esc_url($custom_icon_url) . '" alt="Icon" class="menu-icon" />';
        }

        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
