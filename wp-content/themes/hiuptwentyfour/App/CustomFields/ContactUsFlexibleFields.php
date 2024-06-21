<?php

namespace App\CustomFields;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class ContactUsFlexibleFields
{

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
                Field::make('complex', 'about_us_sections', '')
                    ->setup_labels($layouts_labels)
                    ->set_collapsed(true)

                    //Contact Header - Layout
                    ->add_fields('contact_us_header_layout', 'Header content - Layout', [
                        Field::make('text', 'contact_us_title', __('Contact Page Title'))->set_attribute('placeholder', 'Contact Page Title - Like: Contact Us'),
                        Field::make('text', 'contact_us_header', __('Header content'))->set_attribute('placeholder', 'Header content - Like: Office Locations!'),
                    ])

                    //Contact location - Card Layout
                    ->add_fields('contact_us_location_card_layout', 'Location Card - Layout', [
                        Field::make('complex', 'location_card', 'Location')
                            ->add_fields([
                                Field::make('image', 'country_logo', 'Country Logo')->set_help_text(__('Country Logo - Recommended Aspect Ratio:1/1, Eg. 48px/48px'))->set_width(33.33),
                                Field::make('text', 'contact_us_heading_five', __('Heading 5'))->set_attribute('placeholder', 'Heading - Like: Nepal')->set_width(33.33),
                                Field::make('text', 'contact_us_heading_six', __('Heading 6'))->set_attribute('placeholder', 'Sub Heading - Like: Product Enquiry')->set_width(33.33),
                                Field::make('complex', 'location_card', 'List Item')
                                    ->set_layout('tabbed-horizontal')
                                    ->add_fields([
                                        Field::make('image', 'icon', 'Icon')->set_width(25)->set_help_text('Recommended Aspect Ratio:1/1, Eg. 16px/16px'),
                                        Field::make('text', 'text_list', __('Text List'))->set_attribute('placeholder', 'Text List - Max: 15 Words')->set_width(75),
                                    ]),
                                Field::make('separator', 'crb_separator', __('Active/Inactive Location ')),
                                Field::make('checkbox', 'crb_show_content', __('Active/Inactive'))->set_option_value('yes')
                            ]),

                    ])

                    //Contact Form -  Layout
                    ->add_fields('contact_us_form_layout', 'Contact Form Container  - Layout', [
                        Field::make('complex', 'left', 'Left')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'contact_left_image', 'Contact image'),
                                Field::make('separator', 'crb_separator', __('Follow us on: Social Media')),
                                Field::make('complex', 'left_sub', '')
                                    ->add_fields([
                                        Field::make('image', 'social_icon', 'Social Icon')->set_width(20),
                                        Field::make('text', 'social_url', __('Social URL'))->set_attribute('placeholder', 'https://example.com')->set_width(70),
                                    ]),
                            ]),
                        Field::make('complex', 'right', 'Right')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('text', 'contact_title', __('Contact Form Title'))->set_attribute('placeholder', 'Contact Form Title'),
                                Field::make('textarea', 'contact_description', __('Contact Form Description'))->set_attribute('placeholder', 'Description - max 60 words'),
                            ]),
                    ])


                    //Map - Layout
                    ->add_fields('contact_us_map_layout', 'Map - Layout', [
                        Field::make('text', 'map_key', __('Map key'))->set_attribute('placeholder', 'Map "your_google_maps_api_key_here"')->set_width(33.33),
                        Field::make('text', 'map_lat', __('Map Latitude'))->set_attribute('placeholder', 'Map Latitude - Like: 40.7128')->set_width(33.33),
                        Field::make('text', 'map_lng', __('Map Longitude'))->set_attribute('placeholder', 'Map Longitude - Like: -74.006')->set_width(33.33),
                        Field::make('map', 'crb_map_location', __('Map'))
                    ])


                // ->add_fields(
                //     array(
                //         Field::make('map', 'crb_map_location', __('Map'))
                //             ->set_key('your_google_maps_api_key_here')  
                //             ->set_help_text(__('Drag and drop the pin on the map to select location'))
                //     )
                // )

            ]);
    }
}