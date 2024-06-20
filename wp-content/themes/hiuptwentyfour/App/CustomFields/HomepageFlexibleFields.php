<?php

namespace App\CustomFields;

use Carbon_Fields\Container;
use Carbon_Fields\Field;


class HomepageFlexibleFields
{
    use PostCategoriesTrait;
    public static function init()
    {
        self::registerPostOptions();
    }

    private static function registerPostOptions()
    {

        $layouts_labels = [
            'plural_name' => 'Layouts',
            'singular_name' => 'Layout',
        ];

        Container::make('post_meta', __('Layout Options'))
            ->where('post_type', '=', 'page')
            ->where('post_id', '=', get_option('page_on_front'))
            ->add_fields([

                Field::make('complex', 'hiup_sections', '')
                    ->setup_labels($layouts_labels)
                    ->set_collapsed(true)

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
                                Field::make('urlpicker', 'short_intro_link', 'Link URL'),
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

                    // Image or Editor Layout
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

                                Field::make('urlpicker', 'right_button_url', 'Button URL')->set_conditional_logic([
                                    ['field' => 'right_image_or_editor', 'value' => 'editor'],
                                ]),
                            ]),
                    ])

                    //Crousel Layout
                    ->add_fields('preamble_video', 'Preamble and Video Layout', [
                        Field::make('text', 'preamble_text', 'Preamble')
                            ->set_width(50),
                        Field::make('complex', 'right_half_img_edit', 'Right Block')
                            ->set_width(50)
                            ->set_duplicate_groups_allowed(false)
                            ->add_fields([
                                Field::make('image', 'video_thumb', 'Video Thumb Image'),
                                Field::make('oembed', 'preamble_video', 'Video URL')
                            ]),
                    ])

                    //Testimonials Layout
                    ->add_fields('testimonial_layout', 'Testimonials Layout', [
                        Field::make('text', 'testimonial_headline', 'Headline'),
                        Field::make('text', 'testimonial_sub_headline', 'Sub Headline'),
                        Field::make('association', 'testimonials', __('Testimonials'))
                            ->set_types([
                                [
                                    'type' => 'post',
                                    'post_type' => 'testimonial',
                                ]
                            ])
                    ])

                    //Counters Layout
                    ->add_fields('counters_layout', 'Counters Layout', [
                        Field::make('complex', 'custom_counter_section', 'Custom Counter Section')
                            ->add_fields([
                                Field::make('image', 'counter_thumbnail_image', 'Thumbnail Image')
                                    ->set_help_text('Recommended size: 676x161.3px'),

                                // Counter items
                                Field::make('complex', 'counter_items', 'Counter Items')
                                    ->set_layout('tabbed-horizontal')
                                    ->add_fields([
                                        Field::make('text', 'counter_end', 'Total Counter')
                                            ->set_default_value('100'),
                                        Field::make('text', 'counter_suffix', 'Counter Suffix')
                                            ->set_default_value('+')
                                            ->set_help_text('Suffix for the counter, e.g., +, K+, M+'),
                                        Field::make('text', 'counter_label', 'Counter Label')
                                            ->set_default_value('Dedicated People'),
                                    ]),
                            ])
                    ])

                    //Short Intro w/Gallery Layout
                    ->add_fields('short_intro_gallery', 'Short Intro w/Products Layout', [
                        Field::make('rich_text', 'short_intro', 'Short Intro'),
                        Field::make('complex', 'product_items', 'Add Products')
                            ->set_layout('tabbed-horizontal')
                            ->add_fields([
                                Field::make('textarea', 'svg_product', 'SVG Product Icon HTML'),
                            ])
                    ])

                    //Posts Feed Layout
                    ->add_fields('posts_feed', 'Posts Feed Layout', [
                        Field::make('text', 'posts_feed_headline', 'Headline')
                            ->set_width(50),
                        Field::make('text', 'posts_feed_subheadline', 'Sub Headline')
                            ->set_width(50),
                        Field::make('text', 'posts_feed_more_info', 'More Info Text')
                            ->set_width(50),
                        Field::make('urlpicker', 'posts_feed_more_url', 'More Info URL')
                            ->set_width(50),
                        Field::make('select', 'choose_category', 'Choose Category')
                            ->add_options(self::getPostCategories()), // Populate options with post categories
                        Field::make('radio_image', 'choose_feed_layout', __('Choose Feed Layout'))
                            ->set_options([
                                'masonry' => get_template_directory_uri() . '/assets/layouts/masonry.png',
                                'carousel' => get_template_directory_uri() . '/assets/layouts/carousel.png',
                            ])

                    ])

            ]);
    }
}
