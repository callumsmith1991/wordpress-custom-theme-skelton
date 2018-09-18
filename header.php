<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="top-bar hide-for-small" id="header-menu">
	<!-- <span class="dashicons dashicons-menu show-for-small"></span> -->
	  <?php wp_nav_menu( array( "theme_location" => 'header-menu' ) ) ?>
</nav>

<nav class="top-bar show-for-small" id="mobileMenu">
	<span class="dashicons dashicons-menu show-for-small" id="toggleMenu"></span>
	<?php wp_nav_menu( array( "theme_location" => 'header-menu' ) ) ?>
</nav>


<div id='site-container'>
	<main id='site-content'>
