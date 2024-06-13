<?php

namespace App\Core;

/*
|--------------------------------------------------------------------------
| Theme Setup
|--------------------------------------------------------------------------
|
| This file is responsible for setting theme default functions and
| modify them to fit our application architecture and design flow.
|
| In this file, we have added WP default hooks and actions to modify
| WP core functions and added custom support for various features
| that we need to make our app according to design and flow chart.
|
*/

class WP
{
    public static function init()
    {
        $instance = new static();

        /** Add actions */
        add_action('wp_enqueue_scripts', [$instance, 'enqueScriptsStyles']);
        add_action('wp_footer', [$instance, 'dequeueWPScripts']);
        add_action('wp_print_styles', [$instance, 'deregisterStyles'], 100);
        add_action('wpseo_metabox_prio', [$instance, 'addYoastToBottom']);
        add_action('after_setup_theme', [$instance, 'afterThemeSetup']);

        /**
         * Remove Actions, Clean up wordpress <head>
         */
        remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
        remove_action('wp_head', 'wp_generator'); // remove wordpress version
        remove_action('wp_head', 'feed_links', 2); // remove rss feed links
        remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
        remove_action('wp_head', 'index_rel_link'); // remove link to index page
        remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
        remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
        remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
        remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
        remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_action('wp_head', 'wp_resource_hints', 2);
        remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
        remove_action('wp_head', 'wp_oembed_add_host_js');
        remove_action('wp_head', 'rest_output_link_wp_head', 10);
        remove_action('wp_head', 'rest_output_link_header', 11, 0);

        /** Add Filters */
        remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
        add_filter('use_block_editor_for_post', '__return_false', 10);
        add_filter('use_block_editor_for_post_type', '__return_false', 10);

        //Customize dashboard
        add_filter('admin_init', [$instance, 'removeDashboardMeta']);

        // Remove WP Gutenberg Blocks duotone support
        remove_filter('render_block', 'wp_render_duotone_support', 10);
        remove_filter('render_block', 'wp_restore_group_inner_container', 10);
        remove_filter('render_block', 'wp_render_layout_support_flag', 10);

        // JPEG Image crop quality override for wp uploaded images
        add_filter('jpeg_quality', [$instance, 'jpegQuality']);
        add_filter('wp_editor_set_quality', [$instance, 'jpegQuality']);

        //SVG Support
        add_filter('upload_mimes', [$instance, 'supportMimeTypes']);

        // Disable automatic updates (This will block automatic updates for all plugins, themes and WP core)
        add_filter('automatic_updater_disabled', '__return_true');

        /**
         * Dev site config
         * Show the plugin update and WP update notifications only on DEV environment
         */
        if (!(defined('ENVIRONMENT') && ENVIRONMENT == 'DEV')) {
            remove_action('admin_notices', 'update_nag', 3);
            add_action('admin_init', [$instance, 'hideWpAdminUpdates']);
            //add_filter('pre_site_transient_update_core', [$instance, 'removeCoreUpdates']); // hide updates for WordPress itself
            //add_filter('pre_site_transient_update_plugins', [$instance, 'removeCoreUpdates']); // hide updates for all plugins
            add_filter('site_transient_update_plugins', [$instance, 'removePluginsUpdateNotifications']);
           // add_filter('pre_site_transient_update_themes', [$instance, 'removeCoreUpdates']); // hide updates for all themes
            add_filter('auto_update_plugin', '__return_false'); // disable auto plugin update
        }

        // Customization
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');

        // Custom functions
        static::acfOptionsPage();
        static::registerMenus();
        static::addCustomImageSizes();
    }

    /**
     * Enque all scripts and styles
     */
    public static function enqueScriptsStyles()
    {
        wp_enqueue_style('hiuptwentyfour', get_stylesheet_uri());
    }

    /**
     * Remove default WP footer scripts
     */
    public static function dequeueWPScripts()
    {
        // Dequeue default scripts
        if (!is_admin()) {
            wp_deregister_script('regenerator-runtime-js');
        }
    }

    /**
     * Hide the WP-update menu item from wp-admin
     */
    public static function hideWpAdminUpdates()
    {
        remove_submenu_page('index.php', 'update-core.php');
    }


    /**
     * Disable WordPress update notification
     */
    // public static function removeCoreUpdates()
    // {
    //     global $wp_version;

    //     return (object) [
    //         'last_checked' => time(),
    //         'version_checked' => $wp_version
    //     ];
    // }

    /**
     * WP crop JPEG image in 98% lossless quality or else the image will appear dull and blurry.
     */
    public static function jpegQuality($arg)
    {
        return 95;
    }

    /**
     * Remove default image sizes
     */
    public static function removeDefaultImageSizes($sizes)
    {
        /* Default WordPress */
        unset($sizes['medium']);       // Remove Medium resolution (300 x 300 max height 300px)
        unset($sizes['medium_large']); // Remove Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
        unset($sizes['large']);        // Remove Large resolution (1024 x 1024 max height 1024px)
        unset($sizes['1536x1536']);    // Added in WP 5.3
        unset($sizes['2048x2048']);    // Added in WP 5.3

        /** @return array */
        return $sizes;
    }

    /**
     * Add custom image sizes
     */
    public static function addCustomImageSizes()
    {
        add_image_size('cta_image', 900, 600, true);
        add_image_size('grid_image', 690, 690, true);
        add_image_size('card_image', 512, 256, true);
    }

    /**
     * Make sure that uploaded files get URL friendly names
     */
    public static function customUploadFilter($file)
    {
        /** @var string */
        $file['name'] = sanitize_file_name($file['name']);

        /** @return array */
        return $file;
    }

    /**
     * Remove update notifications for plugins
     */
    public static function removePluginsUpdateNotifications($value)
    {
        if (isset($value) && is_object($value)) {
            $value->response = [];
        }
        return $value;
    }

    /**
     * Remove dashboard Meta
     */
    public static function removeDashboardMeta()
    {
        remove_action('welcome_panel', 'wp_welcome_panel');
        remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
        remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
        remove_meta_box('dashboard_primary', 'dashboard', 'side');
        remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
        remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
        remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
        remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
        remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
        remove_meta_box('dashboard_activity', 'dashboard', 'normal');
        remove_meta_box('wpseo-dashboard-overview', 'dashboard', 'side');
        remove_meta_box('dashboard_site_health', 'dashboard', 'normal');
    }

    /**
     * This function fires after the theme is loaded
     */
    public static function afterThemeSetup()
    {
        add_theme_support('html5', ['script', 'style']);
    }

    /**
     * Disabled Gutenberg
     */
    public static function deregisterStyles()
    {
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('global-styles');
    }

    /**
     * Always place Yoast SEO Meta Box to bottom
     */
    public static function addYoastToBottom()
    {
        return 'low';
    }

    /**
     * Adds ACF option menu page called (Site Settings) in Dashboard
     */
    public static function acfOptionsPage()
    {
        if (function_exists('acf_add_options_page')) {
            acf_add_options_page([
                'page_title' => 'Site Settings',
                'menu_title' => 'Site Settings',
                'menu_slug'  => 'site-settings',
                'redirect'  => false,
            ]);
        }
    }

    /**
     * Registers Primary nav menu
     */
    public static function registerMenus()
    {
        register_nav_menu('primary_menu', 'Primary Menu');
        register_nav_menu('footer_menu', 'Footer Menu #1');
        register_nav_menu('footer_menu_menu', 'Footer Menu #2');
    }

    // svg support
    function supportMimeTypes($mimes)
    {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
}
