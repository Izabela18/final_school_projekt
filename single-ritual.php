<?php
/**
 * The template for displaying single custom post type ritual
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ItFeelsGood
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
while (have_posts()):
    the_post();

    get_template_part('template-parts/content', get_post_type());

    the_post_navigation();?>



      <?php
      //Custom code for displaying ACF fields (flexible layout content fields with repeaters and gallery)

// check if the flexible content field has rows of data
    if (have_rows('custom_content')):

        // loop through the rows of data
        while (have_rows('custom_content')): the_row();

            // check current row layout
            if (get_row_layout() == 'gallery'):

                // check if the nested repeater field has rows of data
                if (have_rows('image_caption')):

                    echo '<div class="vision-wrapper container">';

                    echo '<ul class="vision-inner-wrapper row">';

                    echo '<div class="col s12 m7 l10">';
                    echo '<li class="card large">';

                    // loop through the rows of data
                    while (have_rows('image_caption')): the_row();

                        $size = 'large';
                        $pic = get_sub_field('image');?>

						          <?php if ($pic): ?>

						            <div class="card-image">

						              <?php echo wp_get_attachment_image($pic['ID'], $size, "", ["class" => "responsive-img"]); ?>

						            </div>

						          <?php endif;?>


					           <?php $caption = get_sub_field('caption');

                    echo '<div class="card-content">' . $caption . '</div>';

                endwhile;

                echo '</li>';
                echo '</div>';

                echo '</ul>';
                echo '</div>';

            endif; //repeater

            if (have_rows('text')):

                echo '<div class="vision-wrapper container">';

                echo '<ul class="vision-inner-wrapper collection">';

                // loop through the rows of data
                while (have_rows('text')): the_row();?>


					         <?php $caption1 = get_sub_field('text1');

                    echo '<li class="col s6 collection-item">' . $caption1 . '</li>';?>

					        <?php $caption2 = get_sub_field('text2');

                    echo '<li class="col s6 collection-item">' . $caption2 . '</li>';

                endwhile;

                echo '</ul>';
                echo '</div>';

            endif; //repeater

            echo '<div class="vision-wrapper container">';

            echo '<ul class="vision-inner-wrapper row">';

            $images = get_sub_field('images');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)

            if ($images): ?>

			        <?php foreach ($images as $image): ?>
			            <li class="col s4 gallery_img">
			            	<div class="card">
			                	<div class="card-image">
			              <?php echo wp_get_attachment_image($image['ID'], $size, "", ["class" => "responsive-img"]); ?>
			            </div>
			            </div>
			            </li>
			        <?php endforeach;?>

		    <?php endif;

    echo '</ul>';
    echo '</div>';

endif; //layout

endwhile;

else:

    // no layouts found

endif;

?>



			<?php endwhile; // End of the loop.    ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
