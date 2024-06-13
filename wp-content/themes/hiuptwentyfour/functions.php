<?php

use Carbon_Fields\Carbon_Fields;
use App\CustomFields\InitCustomFields;

add_action('after_setup_theme', function () {
    require_once get_template_directory() . '/vendor/autoload.php';
    Carbon_Fields::boot();
    InitCustomFields::init();
});

/*
|--------------------------------------------------------------------------
| Namespace Class Autoloader
|--------------------------------------------------------------------------
|
| This will loads any class using correct namespaces.
|
*/

spl_autoload_register('app_namespace_autoloader');
function app_namespace_autoloader($namespace)
{
    /** @var string Create directory path from called namespace */
    $namespace_path = str_replace('\\', DIRECTORY_SEPARATOR, $namespace);

    /** @var string Create full file path using namespace directory path */
    $class_file_name = get_template_directory() . DIRECTORY_SEPARATOR . $namespace_path . '.php';

    /** If correct namespace file exists, include once */
    if (file_exists($class_file_name)) {
        include_once $class_file_name;
    }
}

// Init app
add_action('init', ['App\App', 'init']);

function get_asset($asset_path)
{
    return get_template_directory_uri() . "/{$asset_path}";
}

function the_asset($asset_path)
{
    echo get_asset($asset_path);
}

add_action('after_setup_theme', 'wpdocs_theme_setup');
function wpdocs_theme_setup()
{
    /** @see https://www.typeform.com/blog/ask-awesomely/facebook-event-photo-size/ */
    add_image_size('fb-thumb', 1200, 628, true); // 1200 x 628 pixels – this is the standard size
    add_image_size('fb-thumb-large', 1920, 1005, true); // 1920 x 1005 pixels – for best quality across all screen sizes

    /** @see https://developers.google.com/search/docs/appearance/structured-data/event */
    add_image_size('thumb-large', 1920, 1080, true); // 16x9 for google
    add_image_size('thumb-small', 480, 360, true); // 4x3 for google
    add_image_size('thumb-mini', 120, 120, true); // 1x1 for google
}

//remove default wordpress editor
add_action('admin_init', function() {
    // List of post types to disable the editor for
    $post_types = ['page'];

    foreach ($post_types as $post_type) {
        remove_post_type_support($post_type, 'editor');
    }
});


function custom_mime_types($mimes) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
}
add_filter('mime_types', 'custom_mime_types');

// Check for file extension and MIME type
function check_webp_upload($file) {
    $file_type = wp_check_filetype($file['name']);
    if (in_array($file_type['ext'], ['webp']) && in_array($file_type['type'], ['image/webp'])) {
        $file['type'] = 'image/webp';
    }
    return $file;
}
add_filter('wp_handle_upload_prefilter', 'check_webp_upload');

// Add WebP support to media library
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $info = @getimagesize($path);
        if ($info && $info[2] === IMAGETYPE_WEBP) {
            $result = true;
        }
    }
    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);


