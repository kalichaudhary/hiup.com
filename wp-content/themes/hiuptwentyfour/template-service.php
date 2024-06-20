<?php

/* Template Name: Services Template */

$context          = Timber::context();
$context['posts'] = Timber::get_posts();

Timber::render('templates/services.twig', $context);
