<?php
/**
 * Main Site Header Template
 * 
 * @author   Andrea Musso
 * 
 * @package  Foundry
 * 
 */

?>

<?php 
// Social logic

$displaySocial = get_theme_mod('display-social');

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="msapplication-tap-highlight" content="no">

	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="<?php bloginfo(); ?>">

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo(); ?>">
	<!--=== GMT head ===-->
	<?php  WPSeed_gtm('head') ?>
    <!--=== gmt end ===-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--=== GMT body ===-->
<?php WPSeed_gtm('body') ?>
<!--=== gmt end ===-->



<header class="site-header">
	<div class="site-header__inner l-container">
		<div class="site-header__logo-container">
			<?php get_template_part( 'partials/header/logo' ); ?>
		</div>
		
		<div class="site-header__nav-container js-menu" id="menuContainer" style="background-image: url(<?php echo get_template_directory_uri(  ) ?>/dist/images/menu-bg.jpg);">
			<?php get_template_part( 'partials/navigation/primary' ); ?>
		</div>

		<div class="site-header__hamburger-container">
			<?php get_template_part( 'partials/header/hamburger' ); ?>
		</div>
	</div>
</header><!-- .site-header -->

<div id="smootherWrapper">
<div id="smootherContent">





