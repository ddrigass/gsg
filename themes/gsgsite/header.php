<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gsgsite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gsgsite' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$gsgsite_description = get_bloginfo( 'description', 'display' );
			if ( $gsgsite_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $gsgsite_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'gsgsite' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<aside class="sideMenu">
		<div class="sideMenuItem">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/MenuIcon.png" alt="">
			<i class="fal fa-times"></i></div>
			<div class="sideMenuContent">
				<div class="menuBlock">

				</div>
				<div class="infoRow">
					<div class="infoCol">
						<p><?php _e('Change language','GsgStrings'); ?></p>
						<?php do_action('wpml_add_language_selector'); ?>
					</div>
					<div class="infoCol">

					</div>
					<div class="infoCol">

					</div>
					<div class="infoCol">

					</div>
				</div>
				<div class="socialsRow">
					<span><?php _e('Our social:','GsgStrings'); ?></span>
					<img src="<?php bloginfo('template_url'); ?>/assets/images/MenuIcon.png" alt="">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/MenuIcon.png" alt="">
				</div>
			</div>
		<div class="sideMenuItem"><i class="fal fa-envelope"></i></div>
		<div class="sideMenuItem"><?php echo ICL_LANGUAGE_CODE; ?></div>
	</aside>
	<div id="content" class="site-content">
