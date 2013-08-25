<?php
/**
 * Template Name: Table of Contents
 *
 * @package Contemplative Fitness
 */

get_header(); ?>

<div class="container">
  <header class="book-title">
    <h1>Contemplative Fitness</h1>
    <h2>by <a href="http://kennethfolkdharma.com">Kenneth Folk</a></h2>
  </header>
  <nav>
     <ul class="toc">
        <?php wp_list_pages('sort_column=menu_order&exclude=33&title_li='); ?>
    </ul>
  </nav>
</div>

  

  <?php get_footer(); ?>