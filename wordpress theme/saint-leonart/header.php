<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage saint-leonart
 * @since Saint Léon'Art 0.0.1
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html <?php language_attributes(); ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="banner-wrapper">
	<div id="Banner" class="banner">
		<img class="site-logo" src="img/logo.png">
		<?php if ( is_front_page() && is_home() ) : ?>
		    <h1 class="site-title">
		    	<a class="banner-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	    		<span class="banner-emphasis">2018</span>
		    </h1>
		<?php else : ?>
			<p class="site-title">
		    	<a class="banner-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	    		<span class="banner-emphasis">2018</span>
		    </p>
	    <?php endif;?>

		<!--
		<?php $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
			<p class="site-description"><?php echo $description; ?></p>
		<?php endif;?>
		<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'saint-leonart' ); ?></button>
		-->

		<?php get_sidebar(); ?>
	</div>
</div>
