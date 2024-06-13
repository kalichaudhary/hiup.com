<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hiuptwentyfour
 */

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="olivegroup.io">
    <meta name="description" content="Hiup Solutions">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="" rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/vendor/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/vendor/glightbox/css/glightbox.css">

    <!-- Theme CSS -->
<?php wp_head();?> 
</head>

<body <?php body_class();?>> 