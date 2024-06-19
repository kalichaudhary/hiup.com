<?php

namespace App\CustomFields;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class AboutUsFlexibleFields
{

    public static function init()
    {
        self::registerAboutUsPageFields();
    }

    private static function registerAboutUsPageFields()
    {
        $layouts_labels = [
            'plural_name' => 'Layouts',
            'singular_name' => 'Layout',
        ];

        Container::make('post_meta', __('Layout Options - About Us Page'))
            ->where('post_type', '=', 'page')
            ->set_priority('high')
            ->add_fields([
                Field::make('complex', 'about_us_sections', '')
                    ->setup_labels($layouts_labels)
                    ->set_collapsed(true)

                    //About Content Layout
                    ->add_fields('about_us_wysiwyg_layout', 'Wysiwyg Editor Layout', [
                        Field::make('rich_text', 'about_us_wysiwyg', 'WYSIWYG Editor'),
                    ])

                    //About Image Layout
                    ->add_fields('about_us_content_layout', 'Image Layout', [
                        Field::make('image', 'about_us_image', 'Image 1')->set_width(33.33),
                        Field::make('image', 'about_us_image', 'Image 3')->set_width(33.33),
                        Field::make('image', 'about_us_image', 'Image 5')->set_width(33.33),
                        Field::make('image', 'about_us_image', 'Image 2')->set_width(33.33),
                        Field::make('image', 'about_us_image', 'Image 4')->set_width(33.33),
                        Field::make('image', 'about_us_image', 'Image 6')->set_width(33.33),
                    ])

                    //Our Values Layout
                    ->add_fields('about_us_values_layout', 'Our Values Layout', [
                        Field::make('text', 'crb_our_values', __('Our Values Title'))->set_attribute('placeholder', 'Our Values')->set_width(33.33),
                        Field::make('text', 'crb_button_contact_us_url', __('Button Contact Us URL'))->set_attribute('placeholder', 'https://example.com/contact-us')->set_width(33.33),
                        Field::make('separator', 'crb_separator_about_us_our_values', __('3 Steps Section')),

                    ])
            ]);
    }
}