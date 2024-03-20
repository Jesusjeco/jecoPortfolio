<?php

include("includes/index.php");

function clean_custom_menu($menu_name)
{
    // Get the menu items based on the $menu_name parameter
    // (the same as 'theme_location' or 'menu' in the wp_nav_menu arguments)
    // This code is the basis of the wp_nav_menu() function, where menu ID gets from slug

    $locations = get_nav_menu_locations();

    if ($locations && isset($locations[$menu_name])) {

        // get menu items
        $menu_items = wp_get_nav_menu_items($locations[$menu_name]);

        // create a list
        $menu_list = '<ul id="menu-' . $menu_name . '">';

        foreach ((array) $menu_items as $key => $menu_item) {
            $menu_list .= '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
        }

        $menu_list .= '</ul>';
    } else {
        $menu_list = '<ul><li>Menu "' . $menu_name . '" undefined.</li></ul>';
    }
    echo $menu_list;
}
