<nav class="bottom-nav"><!-- Previous / Next page links -->
  
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

 <?php if (!empty($prevID)) { ?>
  <div class="float-left">
   <a href="<?php echo get_permalink($prevID); ?>"
     title="<?php echo get_the_title($prevID); ?>">&larr; <?php echo get_the_title($prevID); ?></a>
  </div>
   <?php }
   if (!empty($nextID)) { ?>
   <div class="float-right">
     <a href="<?php echo get_permalink($nextID); ?>" 
      title="<?php echo get_the_title($nextID); ?>"><?php echo get_the_title($nextID); ?> &rarr;</a> 
      
   </div>
    <?php } ?>
    <section class="toc-link">
      <a href="<?php echo home_url(); ?>">Table of contents</a>
    </section>
</nav>
