<?php

namespace App\PostTypes;

use App\Core\Constant;

/*
|--------------------------------------------------------------------------
| ServicePostType Class.
|--------------------------------------------------------------------------
|
|
*/

class ServicePostType
{
    public static function init()
    {
        // Register post type "Service"
        register_post_type(Constant::POSTTYPE_SERVICE, [
            'label'  => Constant::POSTTYPE_SERVICE,
            'labels' => [
                'name'          => 'Service',
                'singular_name' => 'Service',
                'all_items'     => 'All Service',
                'add_new_item'  => 'Add new Service',
                'add_new'       => 'Add new Service',
                'new_item'      => 'New Service',
                'edit_item'     => 'Edit Service',
                'update_item'   => 'Update Service',
                'view_item'     => 'View Service',
                'search_items'  => 'Search Service',
            ],
            'description'  => '',
            'public'       => true,
            'show_ui'      => true,
            'show_in_rest' => false,
            'has_archive'  => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'map_meta_cap' => true,
            'hierarchical' => true, // Add this line to enable hierarchical post types
            'menu_icon'    => 'dashicons-superhero',
            'supports'     => ['title', 'thumbnail', 'excerpt'],
        ]);
    }
}
