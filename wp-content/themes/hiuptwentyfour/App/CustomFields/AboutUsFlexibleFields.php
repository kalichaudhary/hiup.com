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

        Container::make('post_meta', __('Layout Options'))
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'template-about.php')
            ->set_priority('high')
            ->add_fields([
                Field::make('complex', 'about_us_sections', '')
                    ->setup_labels($layouts_labels)
                    ->set_collapsed(true)

                    //About Content Layout
                    ->add_fields('textarea_layout', 'TextArea Editor & Image Layout', [
                        Field::make('textarea', 'about_us_hd_content', __('TextArea Editor')),
                        Field::make('complex', 'left', 'Left')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'image_above', 'Above Image')->set_help_text('Recommended Aspect Ratio:16/9, Eg. 1600px/900px'),
                                Field::make('image', 'image_below', 'Below Image')->set_help_text('Recommended Aspect Ratio:4/3, Eg. 1600px/1200px'),
                            ]),
                        Field::make('complex', 'middle', 'Middle')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'image_middle', 'Above Image')->set_help_text('Recommended Aspect Ratio:23/27, Eg. 920px/1080px'),
                            ]),
                        Field::make('complex', 'right', 'Right')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('text', 'quote_title', __('Title')),
                                Field::make('text', 'quote_description', __('Description')),
                                Field::make('image', 'image_right', 'Right Image')->set_help_text('Recommended Aspect Ratio:16/9, Eg. 1600px/900px'),
                            ]),
                    ])

                    //Counter Layout
                    ->add_fields('about_us_image_counter_layout', 'Text, Image, Counter Layout', [
                        Field::make('text', 'crb_image_counter_layout_title', __('Title'))->set_attribute('placeholder', 'Title'),
                        Field::make('textarea', 'crb_image_counter_layout_short_description', __('Short Description'))->set_attribute('placeholder', 'Short Description - Max 50 words'),

                        Field::make('complex', 'left', 'Image')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(20)
                            ->add_fields([
                                Field::make('image', 'image_block', 'Image'),
                            ]),
                        Field::make('complex', 'right', 'Description and Counter - Layout')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(80)
                            ->add_fields([
                                Field::make('textarea', 'crb__image_counter_layout_description', __('Long Description'))->set_attribute('placeholder', 'Long Description - Max 200 words'),
                                Field::make('separator', 'crb_separator_counter_block', __('Add Counters block')),
                                Field::make('complex', 'counter_items', 'Counter Items')
                                    ->set_layout('tabbed-horizontal')
                                    ->add_fields([
                                        Field::make('text', 'counter_label', 'Counter Label')
                                            ->set_default_value('Dedicated People'),
                                        Field::make('text', 'counter_end', 'Total Counter')
                                            ->set_default_value('100'),
                                        Field::make('text', 'counter_suffix', 'Counter Suffix')
                                            ->set_default_value('+')
                                            ->set_help_text('Suffix for the counter, e.g., +, K+, M+'),
                                    ]),
                            ]),
                    ])

                    //Steps Layout
                    ->add_fields('steps_layout', 'Steps Layout', [
                        Field::make('text', 'crb_title', __('Title'))->set_attribute('placeholder', 'Title')->set_width(33.33),
                        Field::make('urlpicker', 'crb_button_contact_us_url', __('Button URL')),
                        Field::make('separator', 'crb_separator_about_us', __('3 Steps Section')),

                        Field::make('complex', 'steps_one', 'Step 1')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'image_block_step_one', 'Image')->set_help_text('Recommended Aspect Ratio:9/8, Eg. 63px/56px'),
                                Field::make('text', 'crb_steps_title_block_step_one', __('Title'))->set_attribute('placeholder', 'Title'),
                                Field::make('textarea', 'crb_steps_description_block_step_one', __('Description'))->set_attribute('placeholder', 'Description')
                            ]),
                        Field::make('complex', 'steps_two', 'Step 2')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'image_block_step_two', 'Image')->set_help_text('Recommended Aspect Ratio:9/8, Eg. 63px/56px'),
                                Field::make('text', 'crb_steps_title_block_step_two', __('Title'))->set_attribute('placeholder', 'Title'),
                                Field::make('textarea', 'crb_steps_description_block_step_two', __('Description'))->set_attribute('placeholder', 'Description')
                            ]),
                        Field::make('complex', 'steps_three', 'Step 3')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'image_block_step_three', 'Image')->set_help_text('Recommended Aspect Ratio:9/8, Eg. 63px/56px'),
                                Field::make('text', 'crb_steps_title_block_step_three', __('Title'))->set_attribute('placeholder', 'Title'),
                                Field::make('textarea', 'crb_steps_description_block_step_three', __('Description'))->set_attribute('placeholder', 'Description')
                            ]),
                    ])




                    //Vision Layout
                    ->add_fields('about_us_image_layout', 'Left Title/Description, Right Image Layout', [
                        Field::make('complex', 'left', 'Title and Description')
                            ->set_width(60)
                            ->add_fields([
                                Field::make('text', 'crb__image_counter_layout_title', __('Title'))->set_attribute('placeholder', 'Title'),
                                Field::make('textarea', 'crb_image_counter_layout_short_description', __('Short Description'))->set_attribute('placeholder', 'Short Description - Max 60 words'),

                            ]),
                        Field::make('complex', 'right', 'Image')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(40)
                            ->add_fields([
                                Field::make('image', 'image_block', 'Image')->set_help_text('Recommended Aspect Ratio:41/29, Eg. 615px/435px'),
                            ]),
                    ])

                    // Brand Layout
                    ->add_fields('about_us_brand_layout', 'Clients Logos Layout', [
                        Field::make('media_gallery', 'image_brand', 'Clients Logo')->set_help_text('Recommended Aspect Ratio:4/1, Eg. 100px/25px'),
                    ])


                    //Award and Team Layout
                    ->add_fields('about_us_award_team_layout', 'Award and Team Layout', [
                        Field::make('complex', 'left', 'Awarded Team')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'image_block', 'Image')->set_help_text('Recommended Aspect Ratio:6/7, Eg. 300px/350px'),
                                Field::make('text', 'crb_award_team_title', __('Title'))->set_attribute('placeholder', 'Awards`N Stuff -Title'),
                                Field::make('rich_text', 'crb_award_team_card_award_description', __('Award Description'))->set_attribute('placeholder', 'Award Description - Max 3 words'),
                                Field::make('text', 'crb_award_team_card_award_year', __('Award Year'))->set_attribute('placeholder', 'Award Year'),
                            ]),
                        Field::make('complex', 'middle', 'Meat Our Team')
                            ->set_width(33.33)
                            ->set_layout('tabbed-horizontal')
                            ->add_fields([
                                Field::make('image', 'meat_our_team_image', 'Team Avatar')->set_help_text('Recommended Aspect Ratio:1/1, Eg. 300px/300px'),
                                Field::make('text', 'crb_avatar_name', __('Name'))->set_attribute('placeholder', 'Avatar Name'),
                                Field::make('text', 'crb_avatar_designation', __('Designation'))->set_attribute('placeholder', 'Avatar Designation')->set_width(44.44),
                            ]),
                        Field::make('urlpicker', 'crb_join_team_url', __('Join Team URL'))
                            ->set_width(33.33),

                    ])

                    //Action box Layout
                    ->add_fields('about_us_action_box_layout', 'Introduction Layout', [
                        Field::make('complex', 'left', 'Avatar')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(50)
                            ->add_fields([
                                Field::make('image', 'action_avatar_image', 'Action Avatar')->set_help_text('Recommended Aspect Ratio:1/1, Eg. 300px/300px'),
                                Field::make('text', 'crb_action_box_avatar_name', __('Name'))->set_attribute('placeholder', 'Avatar Name'),
                                Field::make('text', 'crb_action_box_avatar_designation', __('Designation'))->set_attribute('placeholder', 'Avatar Designation'),
                            ]),
                        Field::make('rich_text', 'crb_action_box_wysiwyg_description', __('Introduction'))
                            ->set_width(50),

                    ])


            ]);
    }
}
