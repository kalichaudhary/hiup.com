<?php

/**
 * Page banner Block Template.
 *
 */

$is_home        = is_home();
$page_for_posts = get_option('page_for_posts');
$page_id        = $is_home === true ? $page_for_posts : get_the_ID();
$title          = get_the_title($page_id);
$img_id         = get_post_thumbnail_id($page_id);
$alt            = get_post_meta($img_id, '_wp_attachment_image_alt', true) ?: $title;
$cover_image    = get_post_meta($page_id,'cover_image',true);
$cover_imd_id   = is_singular('service') ? ($cover_image ? $cover_image : $img_id) : $img_id;

?>

<div class="bread" style="background:url(<?php echo wp_get_attachment_url($cover_imd_id); ?>);background-position: bottom;background-attachment: fixed;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="sa text-center">
                    <?php echo sprintf('<h1>%s</h1>', wp_kses_post($title)); ?>
                    <?php if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p>', '</p>');
                    }; ?>
                </div>
            </div>
        </div>
    </div>
</div>