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

        Container::make('theme_options', __('Hiup Settings'))
            ->add_tab(
                __('General Settings'),
                array(
                    Field::make('separator', 'crb_separator_common_header', __('Header Settings')),
                    Field::make('text', 'crb_visit_time', __('Visit time'))->set_width(33.33),
                    Field::make('text', 'crb_phone_number', __('Phone No.'))->set_width(33.33),
                    Field::make('image', 'header_logo', __('Header Logo'))->set_help_text('Recommended Aspect Ratio:103/22, Eg. 103px/22px')->set_width(100),
                    Field::make('separator', 'crb_separator_common_logo', __('Footer Settings')),
                    Field::make('image', 'footer_logo', __('Logo'))->set_help_text('Recommended Aspect Ratio:1/1, Eg. 40px/40px')->set_width(50),
                    Field::make('image', 'powered_by_logo', __('Powered By Logo'))->set_help_text('Recommended Aspect Ratio:137/40, Eg. 137px/40px')->set_width(50),
                    Field::make('text', 'address', __('Address')),
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
                )
            )
            ->add_tab(
                __('Additional Scripts'),
                array(
                    Field::make('textarea', 'crb_header_scripts', __('Header Scripts')),
                    Field::make('textarea', 'crb_footer_scripts', __('Footer Scripts')),
                )
            );
    }
}
