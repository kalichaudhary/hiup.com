<?php

namespace App\PostTypes;

use App\Core\Constant;

/*
|--------------------------------------------------------------------------
| TestimonialPostType Class.
|--------------------------------------------------------------------------
|
|
*/

class TestimonialPostType
{
    public static function init()
    {
        // Register post type "testimonial"
        register_post_type(Constant::POSTTYPE_TESTIMONIAL, [
            'label'  => Constant::POSTTYPE_TESTIMONIAL,
            'labels' => [
                'name'          => 'Testimonial',
                'singular_name' => 'Testimonial',
                'all_items'     => 'All Testimonial',
                'add_new_item'  => 'Add new Testimonial',
                'add_new'       => 'Add new Testimonial',
                'new_item'      => 'New Testimonial',
                'edit_item'     => 'Edit Testimonial',
                'update_item'   => 'Update Testimonial',
                'view_item'     => 'View Testimonial',
                'search_items'  => 'Search Testimonial',
            ],
            'description'          => '',
            'public'               => false,
            'show_ui'              => true,
            'show_in_rest'         => false,
            'has_archive'          => false,
            'show_in_menu'         => true,
            'map_meta_cap'         => true,
            'hierarchical'         => false,
            'menu_icon'            => 'dashicons-groups',
            'supports'             => ['title','thumbnail'],
        ]);

    }

}
