<?php

namespace App\CustomFields;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class ThemeOptionsFields
{

    public static function init()
    {
        self::attachThemeOptions();
    }

    private static function attachThemeOptions()
    {
        Container::make('theme_options', __('Theme Options'))
            ->add_fields([
                Field::make('text', 'crb_text', 'Text Field'),
            ]);
    }
}
