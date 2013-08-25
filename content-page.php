<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Contemplative Fitness
 */
?>
<div class="container">
	<header>
		<h1><?php the_title(); ?></h1>
		<?php 
		/**
		<h2 class="subtitle"><?php the_subtitle(); ?></h2> 
		*/ 
		?>
	</header>

	<article>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'contemplative_fitness' ),
				'after'  => '</div>',
			) );
		?>
	</article><!-- .entry-content -->

	<?php get_template_part( 'nav-bottom'); ?>
	
</div><!-- container -->
