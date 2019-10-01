<?php
/*
landing page for the website*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

</head>


<?php
if (is_front_page())
//redirect after 10secs to home page
  header( "refresh:10;url=http://localhost/examen_arbete/?page_id=26/" );

  ?>



<div id="landing-page">



		<?php if (have_posts()) : ?>

		  <?php while (have_posts()) : the_post(); ?>


		    <div class="landing-content">
		    	<?php the_content(); ?>
		    </div>

		     
		   <?php endwhile; ?>

		<?php endif; ?> 


  <?php
  get_footer();
