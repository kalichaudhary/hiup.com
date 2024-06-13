<?php

if (empty($args)) {
    return;
}

$social_medias = $args;

?>

<div class="col-lg-5">
    <div class="header-social text-end">
        <?php foreach ($social_medias as $media) {
            $icon = $media['icon'];
            $url  = $media['url'];
            echo sprintf('<a href="%s" target="_blank"><i class="fa-brands %s"></i></a>',esc_url( $url),esc_attr($icon));
        }
        ?>
    </div>
</div>