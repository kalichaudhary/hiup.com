<?php

use App\Core\Constant;


if (empty($args)) {
    return;
}

$services       = [];
$display_all_services   = $args['display_all_services'];
$display_as_carousel    = $args['display_as_carousel'];

if ($display_all_services) {
    $_args = [
        'post_type'      => Constant::POSTTYPE_SERVICE,
        'post_status'    => 'publish',
        'posts_per_page' => -1,
    ];
    $services = get_posts($_args);
} else {
    $services = array_filter((array)$args['select_services_to_display']);
}

?>
<?php if ($services) : ?>
    <div class="row">
        <?php echo $display_as_carousel ?  '<div class="owl-carousel owl-theme">' : '' ?>
        <?php foreach ($services as $service) {
            locate_template('views/components/service-card.php', true, false, ['carousel' => $display_as_carousel, 'service' => $service]);
        } ?>
        <?php echo $display_as_carousel ?  '</div>' : '' ?>
    </div>
<?php endif; ?>