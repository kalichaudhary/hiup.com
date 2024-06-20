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
                    ->add_fields('about_us_wysiwyg_layout', 'Wysiwyg Editor - Layout', [
                        Field::make('rich_text', 'about_us_wysiwyg', 'WYSIWYG Editor'),
                    ])

                    //About Image Layout
                    ->add_fields('about_us_content_layout', 'Image(2)/Column(3) Image - Layout', [
                        Field::make('complex', 'left', 'Left')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'image_1', 'Image 1')->set_width(33.33),
                                Field::make('image', 'image_2', 'Image 2')->set_width(33.33),
                            ]),
                        Field::make('complex', 'middle', 'Middle')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'image_1', 'Image 1')->set_width(33.33),
                                Field::make('image', 'image_2', 'Image 2')->set_width(33.33),
                            ]),
                        Field::make('complex', 'right', 'Right')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'image_1', 'Image 1')->set_width(33.33),
                                Field::make('image', 'image_2', 'Image 2')->set_width(33.33),
                            ]),
                    ])

                    //Steps Layout
                    ->add_fields('steps_layout', 'Steps - Layout', [
                        Field::make('text', 'crb_title', __('Title'))->set_attribute('placeholder', 'Title')->set_width(33.33),
                        Field::make('text', 'crb_button_contact_us_url', __('Button URL (Contact Us)'))->set_attribute('placeholder', 'https://example.com/contact-us')->set_width(33.33),
                        Field::make('separator', 'crb_separator_about_us', __('3 Steps Section')),

                        Field::make('complex', 'steps_one', 'Step 1')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'image_block_step_one', 'Image'),
                                Field::make('text', 'crb_steps_title_block_step_one', __('Title'))->set_attribute('placeholder', 'Title'),
                                Field::make('textarea', 'crb_steps_description_block_step_one', __('Description'))->set_attribute('placeholder', 'Description')
                            ]),
                        Field::make('complex', 'steps_two', 'Step 2')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'image_block_step_two', 'Image'),
                                Field::make('text', 'crb_steps_title_block_step_two', __('Title'))->set_attribute('placeholder', 'Title'),
                                Field::make('textarea', 'crb_steps_description_block_step_two', __('Description'))->set_attribute('placeholder', 'Description')
                            ]),
                        Field::make('complex', 'steps_three', 'Step 3')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'image_block_step_three', 'Image'),
                                Field::make('text', 'crb_steps_title_block_step_three', __('Title'))->set_attribute('placeholder', 'Title'),
                                Field::make('textarea', 'crb_steps_description_block_step_three', __('Description'))->set_attribute('placeholder', 'Description')
                            ]),
                    ])

                    //Counter Layout
                    ->add_fields('about_us_wysiwyg_image_counter_layout', 'Wysiwyg Editor, Image, Counter - Layout', [
                        Field::make('text', 'crb_wysiwyg_image_counter_layout_title', __('Title'))->set_attribute('placeholder', 'Title'),
                        Field::make('textarea', 'crb_wysiwyg_image_counter_layout_short_description', __('Short Description'))->set_attribute('placeholder', 'Short Description - Max 50 words'),

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
                                Field::make('textarea', 'crb_wysiwyg_image_counter_layout_description', __('Long Description'))->set_attribute('placeholder', 'Long Description - Max 200 words'),
                                Field::make('separator', 'crb_separator_counter_block', __('Add Counters block')),
                                Field::make('complex', 'counter_block', '')
                                    ->set_duplicate_groups_allowed(false)
                                    ->set_width(50)
                                    ->add_fields([
                                        Field::make('text', 'crb_counter_title_one', __('Title'))->set_attribute('placeholder', 'Counter Title'),
                                        Field::make('text', 'crb_counter_number_one', __('Number'))->set_attribute('placeholder', 'Counter Number'),
                                    ]),
                                // Field::make('complex', 'counter_block', '')
                                //     ->set_duplicate_groups_allowed(false)
                                //     ->set_width(50)
                                //     ->add_fields([
                                //         Field::make('text', 'crb_counter_title_two', __('Title'))->set_attribute('placeholder', 'Counter Title'),
                                //         Field::make('text', 'crb_counter_number_two', __('Number'))->set_attribute('placeholder', 'Counter Number'),
                                //     ]),
                                // Field::make('complex', 'counter_block', '')
                                //     ->set_duplicate_groups_allowed(false)
                                //     ->set_width(50)
                                //     ->add_fields([
                                //         Field::make('text', 'crb_counter_title_three', __('Title'))->set_attribute('placeholder', 'Counter Title'),
                                //         Field::make('text', 'crb_counter_number_three', __('Number'))->set_attribute('placeholder', 'Counter Number'),
                                //     ]),
                                // Field::make('complex', 'counter_block', '')
                                //     ->set_duplicate_groups_allowed(false)
                                //     ->set_width(50)
                                //     ->add_fields([
                                //         Field::make('text', 'crb_counter_title_four', __('Title'))->set_attribute('placeholder', 'Counter Title'),
                                //         Field::make('text', 'crb_counter_number_four', __('Number'))->set_attribute('placeholder', 'Counter Number'),
                                //     ]),
                            ]),
                    ])


                    //Vision Layout
                    ->add_fields('about_us_wysiwyg_image_layout', 'Wysiwyg Editor Image - Layout', [
                        Field::make('complex', 'left', 'Title and Description')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(60)
                            ->add_fields([
                                Field::make('text', 'crb_wysiwyg_image_counter_layout_title', __('Title'))->set_attribute('placeholder', 'Title'),
                                Field::make('textarea', 'crb_wysiwyg_image_counter_layout_short_description', __('Short Description'))->set_attribute('placeholder', 'Short Description - Max 60 words'),
                                // Field::make('text', 'crb_wysiwyg_image_counter_layout_title', __('Title'))->set_attribute('placeholder', 'Title'),
                                // Field::make('textarea', 'crb_wysiwyg_image_counter_layout_short_description', __('Short Description'))->set_attribute('placeholder', 'Short Description - Max 60 words'),
                                // Field::make('text', 'crb_wysiwyg_image_counter_layout_title', __('Title'))->set_attribute('placeholder', 'Title'),
                                // Field::make('textarea', 'crb_wysiwyg_image_counter_layout_short_description', __('Short Description'))->set_attribute('placeholder', 'Short Description - Max 60 words'),
                            ]),
                        Field::make('complex', 'right', 'Image')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(40)
                            ->add_fields([
                                Field::make('image', 'image_block', 'Image'),
                            ]),
                    ])

                    // Brand Layout
                    ->add_fields('about_us_brand_layout', 'Brand Logos - Layout', [
                        Field::make('complex', 'brand_logos', 'Brand Logos')
                            ->set_width(10)
                            ->add_fields([
                                Field::make('image', 'image_brand', 'Brand Logo'),
                            ]),
                    ])


                    //Award and Team Layout
                    ->add_fields('about_us_award_team_layout', 'Award and Team - Layout', [
                        Field::make('complex', 'left', 'Awarded Team')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'image_block', 'Image'),
                                Field::make('text', 'crb_award_team_title', __('Title'))->set_attribute('placeholder', 'Awards`N Stuff -Title'),
                                Field::make('textarea', 'crb_award_team_card_award_description', __('Award Description'))->set_attribute('placeholder', 'Award Description - Max 3 words'),
                                Field::make('text', 'crb_award_team_card_award_year', __('Award Year'))->set_attribute('placeholder', 'Award Year'),
                            ]),
                        Field::make('complex', 'middle', 'Meat Our Team')
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'meat_our_team_image', 'Team Avatar'),
                                Field::make('text', 'crb_avatar_name', __('Name'))->set_attribute('placeholder', 'Avatar Name'),
                                Field::make('text', 'crb_avatar_designation', __('Designation'))->set_attribute('placeholder', 'Avatar Designation')->set_width(44.44),
                                Field::make('text', 'crb_avatar_rating', __('Rating'))->set_attribute('placeholder', 'Avatar Rating')->set_width(22.22),
                            ]),
                        Field::make('complex', 'right', 'Meat Our Team')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('text', 'crb_join_team_url', __('Join Team URL'))->set_attribute('placeholder', 'Join our team'),
                            ]),
                    ])

                    //Action box Layout
                    ->add_fields('about_us_action_box_layout', 'Action Box - Layout', [
                        Field::make('complex', 'left', 'Left - Action Avatar')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'action_avatar_image', 'Action Avatar'),
                                Field::make('text', 'crb_action_box_avatar_name', __('Name'))->set_attribute('placeholder', 'Avatar Name'),
                                Field::make('text', 'crb_action_box_avatar_designation', __('Designation'))->set_attribute('placeholder', 'Avatar Designation'),
                            ]),
                        Field::make('complex', 'middle', 'Middle - Description')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('textarea', 'crb_action_box_wysiwyg_description', __('Description'))->set_attribute('placeholder', 'Description - Max 50 words'),
                            ]),
                        Field::make('complex', 'right', 'Right - Action Decoration Image')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(33.33)
                            ->add_fields([
                                Field::make('image', 'action_decoration_image', 'Action Decoration Image (PNG format)'),
                            ]),
                    ])


            ]);
    }
}
