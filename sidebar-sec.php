<?php
/**
 * The sidebar containing the secondary widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ItFeelsGood
 */
?>
 <?php if ( is_active_sidebar( 'sec' ) ) : ?>
	<aside id="sidebar-sec" class="widget-area">
		<?php dynamic_sidebar( 'sec' ); ?>
</aside>
 <?php endif; 
?>


