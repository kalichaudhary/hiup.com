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
            // ->where('post_type', '=', 'page')
            ->add_tab(
                __('General Settings'),
                array(
                    Field::make('separator', 'crb_separator_common_header', __('Header Settings')),
                    Field::make('text', 'crb_visit_time', __('Visit time'))->set_width(33.33)->set_attribute('placeholder', 'Enter time like: Mon-Fri 9:00AM-6:00PM'),
                    Field::make('text', 'crb_phone_number', __('Phone No.'))->set_width(33.33)->set_attribute('placeholder', 'Enter Phone No. like: +977-1234567890'),
                    Field::make('image', 'header_logo', __('Header Logo'))->set_help_text('Recommended Aspect Ratio:103/22, Eg. 103px/22px')->set_width(100),
                    Field::make('separator', 'crb_separator_common_logo', __('Footer Settings')),
                    Field::make('image', 'footer_logo', __('Logo'))->set_help_text('Recommended Aspect Ratio:1/1, Eg. 40px/40px')->set_width(33.33),
                    Field::make('image', 'powered_by_logo', __('Powered By Logo'))->set_help_text('Recommended Aspect Ratio:137/40, Eg. 137px/40px')->set_width(33.33),
                    Field::make('text', 'copyright_text', __('Copyright Text')),
                )
            )
            ->add_tab(
                __('Social Settings'),
                array(
                    Field::make('separator', 'crb_separator_common_header_section', __('Header Section')),
                    Field::make('complex', 'social_header_logos', 'Social Logos')
                        ->set_layout('tabbed-horizontal')
                        ->add_fields([
                            Field::make('text', 'social_header_icon', __('Social SVG Icon'))->set_attribute('placeholder', 'Enter the svg code')->set_width(50),
                            Field::make('text', 'social_header_url', __('Social URL'))->set_attribute('placeholder', 'http://www.example.com')->set_width(50),
                        ]),
                    Field::make('separator', 'crb_separator_common_footer_section', __('Footer Section')),
                    Field::make('complex', 'social_footer_logos', 'Social Logos')
                        ->set_layout('tabbed-horizontal')
                        ->add_fields([
                            Field::make('text', 'social_footer_icon', __('Social SVG Icon'))->set_attribute('placeholder', 'Enter the svg code')->set_width(50),
                            Field::make('text', 'social_footer_url', __('Social URL'))->set_attribute('placeholder', 'http://www.example.com')->set_width(50),
                        ]),
                    Field::make('separator', 'crb_separator_common_contact_page_section', __('Contact Page Section')),
                    Field::make('complex', 'social_contact_page_logos', 'Social Logos')
                        ->set_layout('tabbed-horizontal')
                        ->add_fields([
                            Field::make('text', 'social_contact_page_icon', __('Social SVG Icon'))->set_attribute('placeholder', 'Enter the svg code')->set_width(50),
                            Field::make('text', 'social_contact_page_url', __('Social URL'))->set_attribute('placeholder', 'http://www.example.com')->set_width(50),
                        ]),
                )
            )

            ->add_tab(
                __('SEO Settings'),
                array(
                    Field::make('complex', 'seo_settings', 'SEO Settings')
                        ->set_layout('tabbed-horizontal')
                        ->add_fields([
                            Field::make('header_scripts', 'crb_header_scripts', __('Header Scripts')),
                            Field::make('footer_scripts', 'crb_footer_scripts', __('Footer Scripts'))
                        ]),
                )
            )
            ->add_tab(
                __('Cookies Settings'),
                array(
                    Field::make('complex', 'cookies_settings', 'Cookies Settings')
                        ->set_layout('tabbed-horizontal')
                        ->add_fields([
                            Field::make('header_scripts', 'crb_header_cookies', __('Header Cookies Scripts')),
                            Field::make('footer_scripts', 'crb_footer_cookies', __('Footer Cookies Scripts'))
                        ]),
                )
            )
            ->add_tab(
                __('Under Construction'),
                array(
                    Field::make('checkbox', 'enable_under_construction', 'Enable Under Construction')->set_help_text('Under Construction Message or Page for your under construction display. Every page and post will redirect to your selected page for non-logged in users.'),
                    Field::make('complex', 'under_construction_settings', 'Under Construction Settings')
                        ->set_duplicate_groups_allowed(false)
                        ->add_fields([
                            Field::make('complex', 'choose_rich_text', 'Choose Rich Text')
                                ->set_width(50)
                                ->add_fields([
                                    Field::make('rich_text', 'under_construction', __('Under Construction Message')),
                                ]),

                            Field::make('complex', 'choose_page', 'Choose Page')
                                ->set_duplicate_groups_allowed(false)
                                ->set_width(50)
                                ->add_fields([
                                    Field::make('multiselect', 'under_construction_page', __('Choose an under Construction Page'))
                                        ->add_options(
                                            array(
                                                'under_construction_page' => 'Under Construction Page',
                                            )
                                        )
                                ]),
                        ])->set_conditional_logic(
                            array(
                                array(
                                    'field' => 'enable_under_construction',
                                    'value' => true,
                                )
                            )
                        ),
                )
            );
    }
}
