<?php require_once('header-submenu.php'); ?>
<div class="main" role="main">
  <div class="medium-image">
    <?php if(has_post_thumbnail()) : the_post_thumbnail('medium'); else : echo '<img src="/wp-content/themes/starkers-master/images/nophoto.gif" alt="No Photo Available">'; endif; ?></div>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <article class="article">
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>			
    </article>
  <?php endwhile; ?>
</div><!-- End Main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>


