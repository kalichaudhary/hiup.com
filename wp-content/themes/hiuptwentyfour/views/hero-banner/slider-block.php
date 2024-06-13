<?php

/**
 * Slider Banner
 *
 */


$banner_fields = get_field('banner_fields');

if (empty($banner_fields)) {
    return;
}
?>

<div class="banner">
    <div class="owl-carousel owl-theme">
        <?php foreach ($banner_fields as $index => $field) :
            $image_id = $field['image'] ?? 0;
            $heading = $field['heading'] ?? '';
            $sub_heading = $field['sub_heading'] ?? '';
            $paragraph = $field['paragraph'] ?? '';
            $link = $field['button'] ?? '';
        ?>
            <div class="item">
                <div class="slide">
                    <div class="strike b<?php echo $index + 1; ?>">
                        <style>
                            .b<?php echo $index + 1; ?> {
                                background: linear-gradient(rgba(0, 0, 0, 0.521), rgba(0, 0, 0, 0.6)), url(<?php echo wp_get_attachment_url($image_id); ?>);
                                background-size: cover;
                            }
                        </style>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="xs">
                                    <h3><?php echo wp_kses_post($heading); ?></h3>
                                    <h1><?php echo wp_kses_post($sub_heading); ?></h1>
                                    <?php echo wpautop(wp_kses_post($paragraph)); ?>
                                    <?php if ($link) :
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                        <div class="banner-button">
                                            <a class="b-btn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span><?php echo esc_html($link_title); ?></span></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>