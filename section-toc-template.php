<?php
/**
 * Template Name: Section table of contents
 *
 * @package Contemplative Fitness
 */

get_header(); ?>

<div class="container">
  <header class="book-title">
    <h1><?php single_post_title(); ?></h1>
  </header>
  <nav>
     <ul class="toc">
        <?php wp_list_pages('title_li=&sort_column=menu_order&child_of='.$post->ID); ?>
    </ul>
  </nav>

  <?php get_template_part( 'nav-bottom'); ?>
</div>

  

  <?php get_footer(); ?>