<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Goscho
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php
	//get theme options
	$options = get_option( 'theme_settings' ); ?>
	<style>
		:root {
			--accent_color: <?php echo get_theme_mod( 'color_scheme')?>;
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'goscho' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header__inner">
			<div class="site-branding">
				<a href="/">
					<img src="/wp-content/uploads/2019/09/goscho_logo.svg" alt="Goscho Logo">
				</a>
			</div><!-- .site-branding -->
			<div class="site-logo">
				<a href="/">
					<img class="logo__goscho--drink" src="<?php get_home_url(); ?>/wp-content/uploads/2019/09/goscho_drink.svg" alt="Goscho Drink">
					<img class="logo__goscho--gitarre" src="<?php get_home_url(); ?>/wp-content/uploads/2019/09/goscho_gitarre.svg" alt="Goscho Gitarre">
				</a>
			</div>
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<svg class="menu-toggle--top" width="27" height="3" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.5h25" stroke="#FFF" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"/></svg>
					<svg class="menu-toggle--bottom"width="27" height="3" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.5h25" stroke="#FFF" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"/></svg>
				</button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
