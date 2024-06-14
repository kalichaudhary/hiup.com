<?php

namespace App\CustomFields;

use Carbon_Fields\Container;
use Carbon_Fields\Field;


class FlexibleCustomFields
{
    public static function init()
    {
        self::registerPostOptions();
    }

    private static function registerPostOptions()
    {
        Container::make('post_meta', __('Section Options'))
            ->where('post_type', '=', 'page')
            ->where('post_id', '=', get_option('page_on_front'))
            ->add_fields([
                Field::make('complex', 'hiup_sections', 'Sections')

                    //Crousel Layout
                    ->add_fields('carousel', 'Carousel Layout', [
                        Field::make('media_gallery', 'carousel_gallery', 'Upload Images'),
                    ])

                    //Services Layout
                    ->add_fields('service', 'Services Layout', [
                        Field::make('complex', 'services_introduction', 'Services Introduction')
                            ->set_duplicate_groups_allowed(false)
                            ->add_fields([
                                Field::make('rich_text', 'short_intro', 'Short Description'),
                                Field::make('image', 'short_intro_image', 'Thumbnail Image')
                                    ->set_width(50),
                            ])
                            ->set_width(50)
                            ->set_default_value([
                                [
                                    'short_intro' => '<h4>Our</h4>
						        <h2><span class="text-warning">Services</span></h2>'
                                ]
                            ]),

                        Field::make('complex', 'services_repeater', 'Services Repeater')
                            ->add_fields([
                                Field::make('textarea', 'service_icon', 'SVG Icon HTML')
                                    ->set_width(50),
                                Field::make('text', 'service_headline', 'Headline')
                                    ->set_width(50),
                                Field::make('textarea', 'service_intro', 'Service Introduction')
                                    ->set_rows(4),
                            ])
                            ->set_width(50)
                    ])


                    ->add_fields('image_wysiwyg', 'Image and Editor Layout', [
                        Field::make('complex', 'left_half_img_edit', 'Left Block')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(50)
                            ->add_fields([
                                Field::make('radio', 'left_image_or_editor', 'Image or Editor ?')
                                    ->set_options([
                                        'image' => 'Image',
                                        'editor' => 'Editor',
                                    ])
                                    ->set_default_value('image'),

                                Field::make('image', 'left_image_field', 'Image')->set_conditional_logic([
                                    ['field' => 'left_image_or_editor', 'value' => 'image'],
                                ]),

                                Field::make('rich_text', 'left_editor_field', 'Editor')->set_conditional_logic([
                                    ['field' => 'left_image_or_editor', 'value' => 'editor'],
                                ]),
                            ]),

                        Field::make('complex', 'right_half_img_edit', 'Right Block')
                            ->set_duplicate_groups_allowed(false)
                            ->set_width(50)
                            ->add_fields([
                                Field::make('radio', 'right_image_or_editor', 'Image or Editor ?')
                                    ->set_options([
                                        'image' => 'Image',
                                        'editor' => 'Editor',
                                    ])
                                    ->set_default_value('editor'),

                                Field::make('image', 'right_image_field', 'Image')->set_conditional_logic([
                                    ['field' => 'right_image_or_editor', 'value' => 'image'],
                                ]),

                                Field::make('rich_text', 'right_editor_field', 'Editor')->set_conditional_logic([
                                    ['field' => 'right_image_or_editor', 'value' => 'editor'],
                                ]),
                            ]),


                    ])
            ]);
    }
}
