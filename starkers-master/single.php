<?php get_header(); ?>
<div class="main" role="main">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article class="article">

	<h2><?php the_title(); ?></h2>
	
	<?php the_content(); ?>			

	<?php if ( get_the_author_meta( 'description' ) ) : ?>
	<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
	<h3>About <?php echo get_the_author() ; ?></h3>
	<?php the_author_meta( 'description' ); ?>
	<?php endif; ?>

	<?php comments_template( '', true ); ?>

</article>
<?php endwhile; ?>
</div><!-- End Main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>