<?php

namespace App\CustomFields;

use Carbon_Fields\Container;
use Carbon_Fields\Field;


class ServicesFlexibleFields
{
    use ContactForm7Traits;
    public static function init()
    {
        self::registerPostOptions();
    }

    private static function registerPostOptions()
    {

        $layouts_labels = [
            'plural_name'   => 'Layouts',
            'singular_name' => 'Layout',
        ];

        Container::make('post_meta', __('Layout Options'))
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'template-service.php')
            ->add_fields([

                Field::make('complex', 'services_sections', '')
                    ->setup_labels($layouts_labels)
                    ->set_collapsed(true)

                    //Editor and Image Layout consists of Reviews
                    ->add_fields('editor_image', 'Editor and Image w/Reviews Layout', [
                        Field::make('complex', 'left_half_edit_img', 'Left Block')
                            ->set_width(50)
                            ->set_duplicate_groups_allowed(false)
                            ->add_fields([
                                Field::make('text', 'service_headline', 'Headline'),
                                Field::make('text', 'service_subheadline', 'Sub Headline'),
                                Field::make('text', 'service_preamble', 'Preamble'),
                                Field::make('rich_text', 'wysiwyg_editor', 'WYSIWYG Editor'),
                                Field::make('urlpicker', 'button_url', 'Button URL')
                            ]),

                        Field::make('complex', 'right_half_edit_img', 'Right Block')
                            ->set_width(50)
                            ->set_duplicate_groups_allowed(false)
                            ->add_fields([
                                Field::make('image', 'thumbnail', 'Thumbnail'),
                                Field::make('complex', 'right_half_edit_img', 'Reviews Block')
                                    ->set_duplicate_groups_allowed(false)
                                    ->add_fields([
                                        Field::make('media_gallery', 'avatar_gallery', 'Upload Reviewer Images'),
                                        Field::make('text', 'no_students', 'Total Enrolled Counts')
                                            ->set_width(50),
                                        Field::make('text', 'average_review', 'Average Total Reviews')
                                            ->set_width(50),
                                    ]),
                            ]),
                    ])

                    // Image or Editor Layout consists of Reviews
                    ->add_fields('image_wysiwyg', 'Images w/Reviews or Editor Layout', [
                        Field::make( 'checkbox', 'image_wysiwyg_bg', __( 'Enable White Background' ) )
                        ->set_option_value( 'yes' ),
                        Field::make('complex', 'service_left_half_img_edit', 'Left Block')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(50)
                            ->add_fields([
                                Field::make('radio', 'left_image_or_editor', 'Image or Editor ?')
                                    ->set_options([
                                        'image' => 'Images',
                                        'editor' => 'Editor',
                                    ])
                                    ->set_default_value('image'),

                                Field::make('separator', 'image_review_sepeator', __('Images and Review Section'))
                                    ->set_conditional_logic([
                                        ['field' => 'left_image_or_editor', 'value' => 'image']
                                    ])
                                    ->help_text('Please add Alt Text to Images, it will be rendered as Title on page.'),

                                Field::make('image', 'left_image_field_one', 'Image#1')->set_conditional_logic([
                                    ['field' => 'left_image_or_editor', 'value' => 'image'],
                                ])
                                    ->set_width(33.33),

                                Field::make('image', 'left_image_field_two', 'Image#2')->set_conditional_logic([
                                    ['field' => 'left_image_or_editor', 'value' => 'image'],
                                ])
                                    ->set_width(33.33),

                                Field::make('image', 'left_image_field_three', 'Image#3')->set_conditional_logic([
                                    ['field' => 'left_image_or_editor', 'value' => 'image'],
                                ])
                                    ->set_width(33.33),

                                Field::make('complex', 'left_half_edit_img', 'Reviews Block')->set_conditional_logic([
                                    ['field' => 'left_image_or_editor', 'value' => 'image'],
                                ])
                                    ->set_duplicate_groups_allowed(false)
                                    ->add_fields([
                                        Field::make('text', 'average_review', 'Average Total Reviews')
                                            ->set_width(50),
                                        Field::make('text', 'total_based_review', 'Total Ratings Text')
                                            ->set_width(50),
                                    ]),

                                Field::make('rich_text', 'left_editor_field', 'Editor')->set_conditional_logic([
                                    ['field' => 'left_image_or_editor', 'value' => 'editor'],
                                ]),

                                Field::make('image', 'left_button_image', 'Additional Image')->set_conditional_logic([
                                    ['field' => 'left_image_or_editor', 'value' => 'editor'],
                                ]),

                                Field::make('urlpicker', 'left_button_url', 'Button URL')->set_conditional_logic([
                                    ['field' => 'left_image_or_editor', 'value' => 'editor'],
                                ]),
                            ]),

                        Field::make('complex', 'right_half_img_edit', 'Right Block')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(50)
                            ->add_fields([
                                Field::make('radio', 'right_image_or_editor', 'Image or Editor ?')
                                    ->set_options([
                                        'image' => 'Images',
                                        'editor' => 'Editor',
                                    ])
                                    ->set_default_value('image'),

                                Field::make('separator', 'image_review_sepeator', __('Images and Review Section'))
                                    ->set_conditional_logic([
                                        ['field' => 'right_image_or_editor', 'value' => 'image']
                                    ])
                                    ->set_help_text('Please add Alt Text to Images, it will be rendered as Title on page.'),

                                Field::make('image', 'right_image_field_one', 'Image#1')->set_conditional_logic([
                                    ['field' => 'right_image_or_editor', 'value' => 'image'],
                                ])
                                    ->set_width(33.33),

                                Field::make('image', 'right_image_field_two', 'Image#2')->set_conditional_logic([
                                    ['field' => 'right_image_or_editor', 'value' => 'image'],
                                ])
                                    ->set_width(33.33),

                                Field::make('image', 'right_image_field_three', 'Image#3')->set_conditional_logic([
                                    ['field' => 'right_image_or_editor', 'value' => 'image'],
                                ])
                                    ->set_width(33.33),

                                Field::make('complex', 'right_half_edit_img', 'Reviews Block')->set_conditional_logic([
                                    ['field' => 'right_image_or_editor', 'value' => 'image'],
                                ])
                                    ->set_duplicate_groups_allowed(false)
                                    ->add_fields([
                                        Field::make('text', 'average_review', 'Average Total Reviews')
                                            ->set_width(50),
                                        Field::make('text', 'total_based_review', 'Total Ratings Text')
                                            ->set_width(50),
                                    ]),

                                Field::make('rich_text', 'right_editor_field', 'Editor')->set_conditional_logic([
                                    ['field' => 'right_image_or_editor', 'value' => 'editor'],
                                ]),

                                Field::make('image', 'right_button_image', 'Additional Image')->set_conditional_logic([
                                    ['field' => 'right_image_or_editor', 'value' => 'editor'],
                                ]),

                                Field::make('urlpicker', 'right_button_url', 'Button URL')->set_conditional_logic([
                                    ['field' => 'right_image_or_editor', 'value' => 'editor'],
                                ]),
                            ]),
                    ])



                    //Editor and Image only Layout 
                    ->add_fields('editor_image_only', 'Editor and Image only Layout', [
                        Field::make('complex', 'left_half_edit_img_only', 'WYSIWYG Block')
                            ->set_width(50)
                            ->set_duplicate_groups_allowed(false)
                            ->add_fields([
                                Field::make('rich_text', 'wysiwyg_editor', 'WYSIWYG Editor'),
                                Field::make('image', 'additional_img', 'Additional Image'),
                                Field::make('urlpicker', 'button_url', 'Button URL')
                            ]),

                        Field::make('image', 'thumbnail', 'Thumbnail')
                            ->set_width(50),

                    ])

                    //Wysiwyg Layout
                    ->add_fields('service_textarea', 'Textarea Layout', [
                        Field::make('textarea', 'service_textarea', 'Textarea Editor'),
                    ])

                    //Feedback Layout
                    ->add_fields('service_feedback', 'Feedbacks Layout', [
                        Field::make('complex', 'left_half_service_feedback', 'Left Block')
                            ->set_width(50)
                            ->set_duplicate_groups_allowed(false)
                            ->add_fields([
                                Field::make('text', 'tagline', 'Tagline'),
                                Field::make('text', 'headline', 'Headline'),
                                Field::make('complex', 'feedbacks_repeater', 'Feedbacks Block')
                                    ->add_fields([
                                        Field::make('image', 'image', 'Thumbnail Image'),
                                        Field::make('text', 'feedbacker_name', 'Name'),
                                        Field::make('text', 'feedbacker_designation', 'Designation'),
                                        Field::make('textarea', 'feedback', 'Feedback'),
                                    ]),

                            ]),

                        Field::make('complex', 'right_half_service_feedback', 'Right Block')
                            ->set_width(50)
                            ->set_duplicate_groups_allowed(false)
                            ->add_fields([
                                Field::make('text', 'headline', 'Headline'),
                                Field::make('text', 'sub_headline', 'Sub Headline'),
                                Field::make('select', 'choose_form', 'Choose Form')
                                    ->add_options(self::getContactForms7()),
                            ]),
                    ])


            ]);
    }
}
