<?php
/* Template Name: About Template */

$context          = Timber::context();
$context['posts'] = Timber::get_posts();

Timber::render('templates/about.twig', $context);
