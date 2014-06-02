<?php
/*
 * Template Name: No Sidebar
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <article class="article">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    
  </article>
  <?php endwhile; ?>

<?php get_footer(); ?>