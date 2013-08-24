<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Contemplative Fitness
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<h2 class="subtitle"><?php the_subtitle(); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'contemplative_fitness' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta"><span class="previous-next"><!-- Previous / Next page links -->
	 <?php
	 $pagelist = get_pages('sort_column=menu_order&sort_order=asc');
	 $pages = array();
	 foreach ($pagelist as $page) {
	  $pages[] += $page->ID;
	}

	$current = array_search(get_the_ID(), $pages);
	$prevID = $pages[$current-1];
	$nextID = $pages[$current+1];
	?>

	<div class="navigation">
	 <?php if (!empty($prevID)) { ?>
	 <div class="aligncenter">
	   <a href="<?php echo get_permalink($prevID); ?>"
	     title="<?php echo get_the_title($prevID); ?>">&laquo; Previous</a>
	   <?php }
	   if (!empty($nextID)) { ?>
	     — <a href="<?php echo get_permalink($nextID); ?>" 
	      title="<?php echo get_the_title($nextID); ?>">Next &raquo;</a>
	    </div>
	    <?php } ?>
	  </div><!-- .navigation for previous /next page links -->
	</span></footer>

	<?php edit_post_link( __( 'Edit', 'contemplative_fitness' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
