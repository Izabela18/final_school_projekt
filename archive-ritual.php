<?php
/**
 * The template for custom post types 'ritual'
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ItFeelsGood
 */

get_header();
?>

	<div id="primary" class="content-area loading-bg">
	    <main id="main" class="site-main">
			
				<?php if ( have_posts() ) : ?>
		

				<header class="page-header ritual-header">
				<h1 class="archive_title">Rituals</h1>
				<div class="archive-description"><h5>All the rituals that let me feel good. </h5></div>
				</header><!-- .page-header -->
				<div class="ritual-main">
					<div class="ritual-container">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

					else :

					get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
				<!--AOS animation used-->
				<img id="yoga_icon" data-aos="zoom-in-right"  data-aos-easing="linear" data-aos-duration="3000" src="<?php bloginfo('template_directory'); ?> /assets/yoga_icon.svg"  height="300px" width="300px" />
			</div>
				
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();