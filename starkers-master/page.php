<?php get_header(); ?>
<div class="main" role="main">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <article class="article">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </article>
  <?php endwhile; ?>
</div>
<?php get_sidebar(); ?>
<?php require_once('footer-comingsoon.php'); ?>