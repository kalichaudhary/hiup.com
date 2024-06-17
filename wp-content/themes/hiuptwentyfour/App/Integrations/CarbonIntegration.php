<?php

namespace App\Integrations;

use Timber\Integration\IntegrationInterface;
use Carbon_Fields\Carbon_Fields;

class CarbonIntegration implements IntegrationInterface {
    public function should_init(): bool
    {
        return class_exists(Carbon_Fields::class);
    }

    public function init(): void
    {
        // Hook into Timber’s post meta logic.
        add_filter('timber/post/pre_meta', [$this, 'post_get_meta_field'], 10, 5);
    }

    public static function post_get_meta_field($value, $post_id, $field_name, $post, $args)
    {
        // Fetch the meta field value using Carbon Fields.
        return carbon_get_post_meta($post_id, $field_name);
    }
}
