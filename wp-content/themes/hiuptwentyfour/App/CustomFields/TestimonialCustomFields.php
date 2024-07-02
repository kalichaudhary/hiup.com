<?php

namespace App\CustomFields;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class TestimonialCustomFields
{

    public static function init()
    {
        self::registerTestimonialFields();
    }

    private static function registerTestimonialFields()
    {
        Container::make('post_meta', __('Testimonial Fields'))
            ->where('post_type', '=', 'testimonial')
            ->add_fields([
                Field::make('text', 'designation', 'Designation'),
                Field::make('textarea', 'feedback', 'Feedback'),
            ]);
    }
}
