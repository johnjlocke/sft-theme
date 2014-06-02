<?php get_header(); ?>
<div class="main" role="main">
<?php if ( have_posts() ): ?>
<h2>Latest Posts</h2>	
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<article class="article">
			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
			<?php the_content(); ?>
		</article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>
</div><!-- End Main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>