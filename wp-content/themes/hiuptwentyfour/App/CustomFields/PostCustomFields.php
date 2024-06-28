<?php

namespace App\CustomFields;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class PostCustomFields
{
    public static function init()
    {
        self::registerPostFields();
    }

    private static function registerPostFields()
    {
        Container::make('post_meta', __('Post Fields'))
            ->where('post_type', '=', 'post')
            ->set_priority('high')
            ->add_fields([
                Field::make('urlpicker', 'topic_url', 'Topic URL'),
                Field::make('oembed', 'video_url', 'Video URL'),
            ]);
    }
}
