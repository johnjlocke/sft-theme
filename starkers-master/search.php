<?php get_header(); ?>
  <div class="main" role="main">
    <?php if ( have_posts() ): ?>
      <h2>Search Results for '<?php echo get_search_query(); ?>'</h2>	
        <ul class="serp-list">
          <?php while ( have_posts() ) : the_post(); ?>
	  <li>
		<article class="article">
			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
		</article>
	 </li>
         <?php endwhile; ?>
       </ul>
       <?php else: ?>
     <h2>No results found for '<?php echo get_search_query(); ?>. Perhaps try a different search term?'</h2>
       <?php endif; ?>
   <div class="pagination">
        <?php echo paginate_links( $args ) ?>
          <?php
            global $wp_query;
            $big = 999999999; // An unlikely large integer
              echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
               'total' => $wp_query->max_num_pages
             ) );
          ?>
     </div>
  </div><!-- End Main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>