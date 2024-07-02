<?php

namespace App\CustomFields;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class ContactUsFlexibleFields
{
    use ContactForm7Traits;
    public static function init()
    {
        self::registerContactUsPageFields();
    }

    private static function registerContactUsPageFields()
    {
        $layouts_labels = [
            'plural_name' => 'Layouts',
            'singular_name' => 'Layout',
        ];

        Container::make('post_meta', __('Layout Options'))
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'template-contact.php')
            ->set_priority('high')
            ->add_fields([
                Field::make('complex', 'contact_us_sections', '')
                    ->setup_labels($layouts_labels)
                    ->set_collapsed(true)

                    //Contact location - Card Layout
                    ->add_fields('contact_us_location_card_layout', 'Location Card Layout', [
                        Field::make('text', 'contact_us_title', __('Headline')),
                        Field::make('complex', 'location_card', 'Location')
                            ->set_layout('tabbed-horizontal')
                            ->add_fields([
                                Field::make('image', 'country_logo', 'Country Logo')->set_help_text(__('Country Logo - Recommended Aspect Ratio:1/1, Eg. 48px/48px'))
                                    ->set_conditional_logic(
                                        array(
                                            [
                                                'field' => 'active_contact',
                                                'value' => true,
                                                'compare' => '!='
                                            ]
                                        )
                                    ),
                                Field::make('text', 'contact_us_country', __('Country'))
                                    ->set_conditional_logic(
                                        array(
                                            [
                                                'field' => 'active_contact',
                                                'value' => true,
                                                'compare' => '!='
                                            ]
                                        )
                                    ),
                                Field::make('text', 'contact_us_location', __('Location'))
                                    ->set_conditional_logic(
                                        array(
                                            [
                                                'field' => 'active_contact',
                                                'value' => true,
                                                'compare' => '!='
                                            ]
                                        )
                                    ),
                                Field::make('text', 'contact_us_phone', __('Contact Number'))
                                    ->set_conditional_logic(
                                        array(
                                            [
                                                'field' => 'active_contact',
                                                'value' => true,
                                                'compare' => '!='
                                            ]
                                        )
                                    ),
                                Field::make('text', 'active_contact_headline', __('Main Headline'))
                                    ->set_conditional_logic(
                                        array(
                                            [
                                                'field' => 'active_contact',
                                                'value' => true,
                                                'compare' => '='
                                            ]
                                        )
                                    ),
                                Field::make('complex', 'contact_email_repeater', 'Contact Info Repeater')
                                    ->add_fields([
                                        Field::make('text', 'contact_us_headline', __('Headline')),
                                        Field::make('text', 'contact_us_email', __('Email Address')),
                                    ])
                                    ->set_conditional_logic(
                                        array(
                                            [
                                                'field' => 'active_contact',
                                                'value' => true,
                                                'compare' => '='
                                            ]
                                        )
                                    ),
                                Field::make('text', 'contact_us_email', __('Email Address'))
                                    ->set_conditional_logic(
                                        array(
                                            [
                                                'field' => 'active_contact',
                                                'value' => true,
                                                'compare' => '!='
                                            ]
                                        )
                                    ),
                                Field::make('checkbox', 'active_contact', __('Set as Active Contact Details'))
                                    ->set_option_value('no')
                            ]),

                    ])

                    //Contact Form -  Layout
                    ->add_fields('contact_us_form_layout', 'Contact Form Container Layout', [
                        Field::make('complex', 'left', 'Left')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'contact_left_image', 'Contact image'),
                                Field::make('separator', 'crb_separator', __('Follow us on: Social Media')),
                                Field::make('complex', 'left_sub', '')
                                    ->add_fields([
                                        Field::make('select', 'social_icon', 'Social Icon')
                                            ->set_options(
                                                array(
                                                    'fa-facebook-square' => 'Facebook',
                                                    'fa-instagram' => 'Instagram',
                                                    'fa-twitter' => 'Twitter',
                                                    'fa-linkedin-in' => 'LinkedIn',
                                                    'fa-dribbble' => 'Dribbble',
                                                    'fa-pinterest' => 'Pinterest',
                                                )
                                            )
                                            ->set_width(20),
                                        Field::make('text', 'social_url', __('Social URL'))->set_attribute('placeholder', 'https://www.exmaple.com')->set_width(70),
                                    ]),
                            ]),
                        Field::make('complex', 'right', 'Right')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('text', 'contact_title', __('Contact Form Title')),
                                Field::make('textarea', 'contact_description', __('Contact Form Description')),
                                Field::make('select', 'choose_form', 'Choose Form')
                                    ->add_options(self::getContactForms7()),
                            ]),
                    ])


                    //Map 
                    ->add_fields('contact_us_map_layout', 'Map Layout', [
                        Field::make('textarea', 'contact_us_map', __('Add Iframe for Map'))
                    ])

            ]);
    }
}
