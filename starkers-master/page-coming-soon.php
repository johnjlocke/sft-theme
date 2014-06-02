<?php
/*
 * Template Name: Coming Soon
 */
?>
<?php require_once('header-comingsoon.php'); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>

<?php endwhile; ?>

<?php require_once('footer-comingsoon.php'); ?>