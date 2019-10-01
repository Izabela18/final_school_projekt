<?php
/**
 * Template part for displaying content on archive-book.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ItFeelsGood
 */

?>

<div class="col s6 m4 l3">

<div class="card small">


<article id="post-<?php the_ID();?>" <?php post_class();?>>
	    <header class="entry-header book-page-link">
		<?php
if (is_singular()):
    the_title('<h1 class="entry-title card-title">', '</h1>');
else:
    the_title('<h2 class="entry-title card-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
endif;

if ('post' === get_post_type()):
?>
			<div class="entry-meta">
				<?php
itfeelsgood_posted_on();
itfeelsgood_posted_by();
?>
			</div><!-- .entry-meta -->
		<?php endif;?>
        </header><!-- .entry-header -->

        <div class="card-image"><?php itfeelsgood_post_thumbnail();?></div>

	<div class="entry-content">



		<?php wp_link_pages(array(
    'before' => '<div class="page-links">' . esc_html__('Pages:', 'itfeelsgood'),
    'after' => '</div>',
));
?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID();?> -->
		</div>

</div>

