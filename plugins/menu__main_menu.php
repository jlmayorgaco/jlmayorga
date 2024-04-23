<?php

// setup navigation automatically
add_action('load-nav-menus.php', 'auto_nav_creation_primary');


function auto_nav_creation_primary(){

	$name = 'JLMAYORGA_MENU_HomeNavigation';

	$menu_exists = wp_get_nav_menu_object($name);
	if( !$menu_exists){
		$menu_id = wp_create_nav_menu($name);
		$menu = get_term_by( 'name', $name, 'nav_menu' );

        $menu_term_id = $menu->term_id;
        $menu_item_db_id = 0;

		wp_update_nav_menu_item(
            $menu_term_id, 
            $menu_item_db_id,
            array(
                'menu-item-title' =>  __('Me'),
                'menu-item-classes' => 'topics-dropdown',
                'menu-item-url' => '#',
                'menu-item-type' => 'custom',
                'menu-item-status' => 'publish'
            )
        );

	}
}

?>