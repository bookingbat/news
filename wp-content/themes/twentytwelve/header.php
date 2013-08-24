<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <?php wp_head(); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.css">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

    <style type="text/css">
        html {
            margin-top:0!important;
        }
        #page {
            padding-top:0;
            margin-top:0;
            box-shadow: none;
        }
        .site-content article {
            border-bottom:none;
        }
    </style>

    </head>

<body <?php body_class(); ?>>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="padded">

            <a class="brand" href="/">Booking Bat</a>

            <ul class="nav nav-pills pull-right">
                <li><a href="/features">Tour &amp; Features</a></li>
                <li><a href="/pricing">Pricing</a></li>
                <li><a class="trial" href="/free-trial">Free Trial</a></li>
                <li><a href="/news">News</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>


        </div>
    </div>
</div>
<div id="page" class="hfeed site">

	<div id="main" class="wrapper">