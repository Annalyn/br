<?php
/**
 *
 * Template Name: Where have we Worked
 *
 */

?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
   <?php echo do_shortcode( '[mapplic id="4" h="700"]' ); ?>
<?php endwhile; ?>
