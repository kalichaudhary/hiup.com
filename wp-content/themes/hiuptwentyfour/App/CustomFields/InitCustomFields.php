<?php

namespace App\CustomFields;

use App\CustomFields\ThemeOptionsFields;
use App\CustomFields\FlexibleCustomFields;
use App\CustomFields\HomepageCustomFields;
use App\CustomFields\AboutUsFlexibleFields;

class InitCustomFields
{
    public static function init()
    {
        add_action('carbon_fields_register_fields', [self::class, 'registerFields']);
    }

    public static function registerFields()
    {
        // Initialize each custom fields class
        FlexibleCustomFields::init();
        ThemeOptionsFields::init();
        HomepageCustomFields::init();
        AboutUsFlexibleFields::init();
    }
}
