<?php
/**
 * The template for custom post types 'book'
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ItFeelsGood
 */

get_header();
?>

	<div id="primary" class="content-area loading-bg book-articles">
		<main id="main" class="site-main">
			

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			<h1 class="archive_title">Books</h1>
			</header><!-- .page-header -->
			<div class="archive-description"><h5>All the motivational books that keep inspiration high. </h5></div>
			<div class="row">
		
		
			<?php
			
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				
				get_template_part( 'template-parts/content', 'archive', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		
		?>
		</div>
		
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();