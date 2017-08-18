<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width-device-width">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>

</head>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<body <?php body_class(); ?>>

<div class= "container">

<header class="site-header">


<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
 <div class=logo>
 <?php if ( function_exists ( 'the_custom_logo' ) ) {
    the_custom_logo();
}
?>
</div>
<div class="hd-search">
<?php get_search_form(); ?>
</div>
<nav class="site-nav">
<?php

$args = array(
    'theme_location' => 'primary'
);
?>
<?php wp_nav_menu( $args );?>
<div class=site-header1></div>
</header>

 