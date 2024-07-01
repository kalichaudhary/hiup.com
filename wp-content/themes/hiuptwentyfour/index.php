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

$context          = Timber::context();
$context['posts'] = Timber::get_posts();
$context['foo']   = 'bar';
$templates        = ['index.twig'];
if (is_home()) {
	$total_posts = intval(wp_count_posts()->publish);
	$posts_per_page = intval(get_option('posts_per_page'));
	$max_no_pages = ceil($total_posts / $posts_per_page);

	$context['posts_per_page'] = $posts_per_page;
	$context['max_no_pages'] = $max_no_pages;

	$templates = ['home.twig'];
}
Timber::render($templates, $context);
