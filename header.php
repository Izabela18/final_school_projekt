<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ItFeelsGood
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


<body <?php body_class(); ?> >


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'itfeelsgood' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php the_custom_logo();
			if ( is_front_page() && is_page_template('page-main.php') ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>

				<?php
			endif;

				?>
		</div><!-- .site-branding -->

		<!--different navbars for different templates-->

		<?php if ( is_page_template( 'page-main.php' ) ) : ?>
    <nav id="site-navigation" class="main-navigation nav-main-page">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fa fa-bars"></i></a>
	  

    
	
		<?php else : ?>
    <nav id="site-navigation" class="main-navigation nav-pages">
	<div class="nav-wrapper">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fa fa-bars"></i></a>
	

		<?php endif;	?>
		
		<div class="hide-on-med-and-down">
		<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );?>
				</div>
				</div>
				</nav>
		<!--mobile menu with Materialize.css-->
			<div class="sidenav" id="mobile-demo">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );?>
			  </div>
			  	


	</header><!-- #masthead -->


	<div id="content" class="site-content">
