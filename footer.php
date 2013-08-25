<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Contemplative Fitness
 */
?>
<div class="nav-outer toc"><a href="<?php echo home_url(); ?>"><div class="nav-inner"></div></a></div>

</div> <!-- wrap -->

<footer>
  <aside class="copyright">&copy; 2013 Kenneth Folk. All Rights Reserved.</aside>
  <aside class="credit">Website by <a href="http://peaceofmindwebdesign.com">Nadav Spiegelman</a></aside>
  <?php edit_post_link( __( 'Edit this page', 'contemplative_fitness' ), '<aside class="edit-link">', '</aside>' ); ?>
</footer>

<script>
$('body').flowtype({
    maxFont: 24,
    minimum: 500,
    maximum: 1000
});
</script>

</body>
</html>