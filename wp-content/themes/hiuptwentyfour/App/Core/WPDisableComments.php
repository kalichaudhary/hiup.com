<?php

namespace App\Core;

/*
|--------------------------------------------------------------------------
| WPDisableComments
|--------------------------------------------------------------------------
|
| This file is responsible for setting disabling default Comments Post Type
|
*/

class WPDisableComments
{
    public static function init()
    {
        $instance = new static();
        add_action('admin_init', [$instance, 'disableCommentsPostType']);
        add_action('admin_menu', [$instance, 'removeCommentsMenu']);
        add_action('init', [$instance, 'removeCommentLinksFromAdmin']);

        // Close comments on the front-end
        add_filter('comments_open', '__return_false', 20, 2);
        add_filter('pings_open', '__return_false', 20, 2);

        // Hide existing comments
        add_filter('comments_array', '__return_empty_array', 10, 2);
    }

    /**
     * Removes Comment Menu from admin menu
     */
    public function removeCommentsMenu()
    {
        remove_menu_page('edit-comments.php');
    }

    /**
     * Redirect any user trying to access comments page
     */
    public static function disableCommentsPostType()
    {
        // Redirect any user trying to access comments page
        global $pagenow;
        if ($pagenow === 'edit-comments.php') {
            wp_redirect(admin_url());
            exit;
        }

        // Disable support for comments and trackbacks in post types
        remove_post_type_support('post', 'comments');
        remove_post_type_support('post', 'trackbacks');
    }

    /**
     * Remove comments links from admin bar
     */
    public static function removeCommentLinksFromAdmin()
    {
        if (is_admin_bar_showing()) {
            remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
        }

        // Remove comments metabox from dashboard
        remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

        // Remove comments post type from admin menu
        remove_menu_page('edit-comments.php');
    }
}
