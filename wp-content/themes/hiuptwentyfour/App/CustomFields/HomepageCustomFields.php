<?php

namespace App\CustomFields;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class HomepageCustomFields
{

    public static function init()
    {
        self::registerHomePageFields();
    }

    private static function registerHomePageFields()
    {
        Container::make('post_meta', __('Hero Banner'))
         ->where( 'post_type', '=', 'page' )
         ->where('post_id', '=', get_option('page_on_front')) 
            ->add_fields([
                Field::make('text', 'hero_headline', 'Headline')
                ->set_width(33.33),
                Field::make('text', 'hero_sub_headline', 'Sub Headline#1')
                ->set_width(33.33),
                Field::make('text', 'hero_sub_headline_', 'Sub Headline#2')
                ->set_width(33.33),
                Field::make('textarea', 'hero_short_intro', 'Short Intro'),
                Field::make( 'oembed', 'hero_video', 'Video URL' )
                ->set_width(50),
                Field::make( 'image', 'hero_partner','Partners')
                ->set_width(50),
            ]);
    }
}
