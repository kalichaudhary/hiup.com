<?php

/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$context = Timber::context();
$context['posts'] = Timber::get_posts();

$context['is_front_page'] = is_front_page();
$context['category_sections'] = [];

$current_post = Timber::get_post();
$sections = $current_post->meta('hiup_sections');


if ($sections) {
    foreach ($sections as $section) {

        if ($section['_type'] == 'posts_feed') {
            $category = $section['choose_category'] ?? '';
            if ($category) {
                // Fetch posts based on the selected category
                $category_posts = Timber::get_posts([
                    'category_name' => $category->slug,
                ]);

                // Add the category and posts to the context
                $context['category_sections'][] = [
                    'category' => $category,
                    'posts'    => $category_posts,
                ];
            }
        }
    }
}

$templates = array('front-page.twig');
Timber::render($templates, $context);
