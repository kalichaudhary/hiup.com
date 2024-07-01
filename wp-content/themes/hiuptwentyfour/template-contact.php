<?php

/* Template Name: Contact Template */

$context          = Timber::context();
$context['posts'] = Timber::get_posts();

Timber::render('templates/contact.twig', $context);
