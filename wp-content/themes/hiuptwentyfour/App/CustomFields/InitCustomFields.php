<?php

namespace App\CustomFields;

use App\CustomFields\PostCustomFields;
use App\CustomFields\ThemeOptionsFields;
use App\CustomFields\HomepageCustomFields;
use App\CustomFields\AboutUsFlexibleFields;
use App\CustomFields\HomepageFlexibleFields;
use App\CustomFields\ServicesFlexibleFields;
use App\CustomFields\ContactUsFlexibleFields;
use App\CustomFields\TestimonialCustomFields;

class InitCustomFields
{
    public static function init()
    {
        add_action('carbon_fields_register_fields', [self::class, 'registerFields']);
    }

    public static function registerFields()
    {
        // Initialize each custom fields class
        HomepageFlexibleFields::init();
        ThemeOptionsFields::init();
        HomepageCustomFields::init();
        AboutUsFlexibleFields::init();
        ServicesFlexibleFields::init();
        ContactUsFlexibleFields::init();
        PostCustomFields::init();
        TestimonialCustomFields::init();
    }
}
