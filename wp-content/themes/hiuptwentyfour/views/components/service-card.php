<?php

if (empty($args['service'])) {
    return;
}


$carousel     = $args['carousel'];
$service      = $args['service'];


$post_id      = $service->ID;
$title        = $service->post_title;
$excerpt      = $service->post_excerpt;
$thumbnail_id = get_post_meta($post_id, '_thumbnail_id', true) ?: get_post_meta($post_id,'cover_image',true) ;
$permalink    = get_the_permalink($post_id);
$alt          = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true) ?: $title;



?>
<?php echo $carousel ? '<div class="row">' : ''; ?>
<div class="item <?php echo $carousel ? '' : ' col-lg-4'; ?>">
    <div class="blog-card">
        <div class="blog-img">
            <?php echo wp_get_attachment_image($thumbnail_id, ['450', '300'], "", ["class" => "w-100", "loading" => "lazy", 'alt' => $alt]);  ?>
        </div>
        <div class="blog-body">
            <div class="main-bubble">
                <div class="main-bubble-bg"></div>
            </div>
            <?php echo $title ? sprintf('<h5><a href="%s">%s</a></h5>', $permalink, $title) : ''; ?>
            <?php echo wpautop($excerpt); ?>
            <div class="entry-readmore">
                <a href="<?php echo $permalink; ?>">
                    <span>Read More</span>
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<?php echo $carousel ? '</div>' : ''; ?>