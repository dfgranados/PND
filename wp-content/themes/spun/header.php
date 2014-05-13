<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Spun
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrapper">
			<?php $header_image = get_header_image();
			if ( ! empty( $header_image ) ) { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
				</a>
			<?php } // if ( ! empty( $header_image ) ) ?>
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>
		</div>
		<nav role="navigation" class="site-navigation main-navigation">
			<h1 class="screen-reader-text"><?php _e( 'Menu', 'spun' );?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'spun' ); ?>"><?php _e( 'Skip to content', 'spun' ); ?></a></div>
				  <div style="width: 100%;">
					    <div style="float: left; width: 300px; margin-top: 5px;"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></div>
						<div style="float: right;">
					  			<div style="width: 150px;">
								    <div style="float: left;"><a href="https://www.facebook.com/paula.pavlova.3" target="_blank"><img src="http://pipndipyoga.com/wp-content/uploads/2014/05/facebook500.png" width ="30px"/></a></div>
									<div style="float: left;"><a href="http://instagram.com/pipndipyoga" target="_blank"><img src="http://pipndipyoga.com/wp-content/uploads/2014/05/instagram-150x150.png" width ="30px"/></a></div>
									<div style="float: left;"><a href="https://soundcloud.com/pipndipyoga" target="_blank"><img src="http://pipndipyoga.com/wp-content/uploads/2014/05/soundcloud-150x150.png" width ="30px"/></a></div>
								</div>
					    </div>
					   <br style="clear: left;" />
				  </div>
		</nav><!-- .site-navigation .main-navigation -->
	</header><!-- #masthead .site-header -->

	<div id="main" class="site-main">