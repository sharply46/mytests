<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tiberiu_Deliceanu
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Open+Sans|Oswald|Raleway|Roboto" rel="stylesheet">
<!--	font-family: 'Oswald', sans-serif;-->
<!--	font-family: 'Lato', sans-serif;-->
<!--	font-family: 'Roboto', sans-serif;-->
<!--	font-family: 'Indie Flower', cursive;-->
<!--	font-family: 'Raleway', sans-serif;-->
<!--	font-family: 'Open Sans', sans-serif;-->
	<?php wp_head(); ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/10.0.1/lazyload.min.js"></script>
</head>

<body id="barba-wrapper" <?php body_class(); ?>>
<!--page-wrapper-->
<div id="page-wrapper" class="barba-container" >
	<!--page-->
	<div id="page" class="site ">
		<!--header-wrapper-->
		<div class="header-wrapper">
			<!--header-->
			<header id="masthead" class="site-header">

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tiberiu-deliceanu' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->


				<div class="logo">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif;

					$description = get_bloginfo( 'description', 'display' );

					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?>
				</div><!-- .site-branding -->


				<nav id="right-navigation" class="right-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tiberiu-deliceanu' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'right_menu',
						'menu_id'        => 'right-menu',
					) );
					?>
				</nav><!-- #right-navigation -->


			</header><!-- #masthead -->
		</div><!-- .header-wrapper -->

		<div id="content" class="site-content">
