<?php

// function cptui_register_my_cpts_portfolio()
// {
//     /**
//      * Post Type: portfolio.
//      */

//     $labels = [
//         "name" => esc_html__("portfolio", "custom-post-type-ui"),
//         "singular_name" => esc_html__("portfolio", "custom-post-type-ui"),
//         "menu_name" => esc_html__("My portfolio", "custom-post-type-ui"),
//         "all_items" => esc_html__("All portfolio", "custom-post-type-ui"),
//         "add_new" => esc_html__("Add new", "custom-post-type-ui"),
//         "add_new_item" => esc_html__("Add new portfolio", "custom-post-type-ui"),
//         "edit_item" => esc_html__("Edit portfolio", "custom-post-type-ui"),
//         "new_item" => esc_html__("New portfolio", "custom-post-type-ui"),
//         "view_item" => esc_html__("View portfolio", "custom-post-type-ui"),
//         "view_items" => esc_html__("View portfolio", "custom-post-type-ui"),
//         "search_items" => esc_html__("Search portfolio", "custom-post-type-ui"),
//         "not_found" => esc_html__("No portfolio found", "custom-post-type-ui"),
//         "not_found_in_trash" => esc_html__("No portfolio found in trash", "custom-post-type-ui"),
//         "parent" => esc_html__("Parent portfolio:", "custom-post-type-ui"),
//         "featured_image" => esc_html__("Featured image for this portfolio", "custom-post-type-ui"),
//         "set_featured_image" => esc_html__("Set featured image for this portfolio", "custom-post-type-ui"),
//         "remove_featured_image" => esc_html__("Remove featured image for this portfolio", "custom-post-type-ui"),
//         "use_featured_image" => esc_html__("Use as featured image for this portfolio", "custom-post-type-ui"),
//         "archives" => esc_html__("portfolio archives", "custom-post-type-ui"),
//         "insert_into_item" => esc_html__("Insert into portfolio", "custom-post-type-ui"),
//         "uploaded_to_this_item" => esc_html__("Upload to this portfolio", "custom-post-type-ui"),
//         "filter_items_list" => esc_html__("Filter portfolio list", "custom-post-type-ui"),
//         "items_list_navigation" => esc_html__("portfolio list navigation", "custom-post-type-ui"),
//         "items_list" => esc_html__("portfolio list", "custom-post-type-ui"),
//         "attributes" => esc_html__("portfolio attributes", "custom-post-type-ui"),
//         "name_admin_bar" => esc_html__("portfolio", "custom-post-type-ui"),
//         "item_published" => esc_html__("portfolio published", "custom-post-type-ui"),
//         "item_published_privately" => esc_html__("portfolio published privately.", "custom-post-type-ui"),
//         "item_reverted_to_draft" => esc_html__("portfolio reverted to draft.", "custom-post-type-ui"),
//         "item_trashed" => esc_html__("portfolio trashed.", "custom-post-type-ui"),
//         "item_scheduled" => esc_html__("portfolio scheduled", "custom-post-type-ui"),
//         "item_updated" => esc_html__("portfolio updated.", "custom-post-type-ui"),
//         "parent_item_colon" => esc_html__("Parent portfolio:", "custom-post-type-ui"),
//     ];

//     $args = [
//         "label" => esc_html__("portfolio", "custom-post-type-ui"),
//         "labels" => $labels,
//         "description" => "",
//         "public" => true,
//         "publicly_queryable" => true,
//         "show_ui" => true,
//         "show_in_rest" => true,
//         "rest_base" => "",
//         "rest_controller_class" => "WP_REST_Posts_Controller",
//         "rest_namespace" => "wp/v2",
//         "has_archive" => false,
//         "show_in_menu" => true,
//         "show_in_nav_menus" => true,
//         "delete_with_user" => false,
//         "exclude_from_search" => false,
//         "capability_type" => "post",
//         "map_meta_cap" => true,
//         "hierarchical" => false,
//         "can_export" => false,
//         "rewrite" => ["slug" => "portfolio", "with_front" => true],
//         "query_var" => true,
//         "menu_icon" => "dashicons-portfolio",
//         "supports" => ["title", "editor", "thumbnail", "excerpt"],
//         "taxonomies" => ["category"],
//         "show_in_graphql" => false,
//     ];

//     register_post_type("portfolio", $args);
// }

// add_action('init', 'cptui_register_my_cpts_portfolio');
