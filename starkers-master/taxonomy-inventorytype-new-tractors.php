<?php
/*
 * Template Name: New Tractors Taxonomy
 */
?>
<?php require_once('header-submenu.php'); ?>
<div class="hero-image"><?php the_post_thumbnail(); ?>
</div>
<div class="main" role="main">
  <div>
    <p class="filter-by-label">Filter By:</p>
    <ul class="filter-by">
      <li><a href="/tractors">Tractors</a></li>
      <li><a href="/attachments">Attachments</a></li>
      <li><a href="/new-inventory">New</a></li>
      <li><a href="/used-inventory">Used</a></li>
      <li><a href="/kubota">Kubota</a></li>
      <li><a href="/land-pride">Land Pride</a></li>
      <li><a href="/gearmore">Gearmore</a></li>
    </ul>
</div>
<?php global $paged;
      $temp = $wp_query;
      $wp_query = null;
 ?>
<?php $args = array(
		'post_type' => 'inventory',
		'paged'=> $paged,
                'posts_per_page' => 6,
                'offset' => $offset,
		'tax_query' => array(
                       'relation' => 'AND',
			array(
			   'taxonomy' => 'inventorytype',
				'field' => 'slug',
				'terms' => array('new-inventory','tractors'),
                                'operator' => 'AND'
			)
		)
	  ); 
  $wp_query = new WP_Query( $args );
  if ( $wp_query->have_posts() ) { 
    while ( $wp_query->have_posts() ) {
      $wp_query->the_post(); ?>
        <article class="article">
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <a href="<?php the_permalink(); ?>" class="sales-image-link">
               <?php if(has_post_thumbnail()) : echo get_the_post_thumbnail($post_id, 'thumbnail'); 
                     else : echo '<img src="/wp-content/themes/starkers-master/images/nophoto.gif" alt="No Photo Available">'; endif; ?>
            </a>
            <a href="<?php the_permalink(); ?>"><h2 class="inventory-title"><?php the_title(); ?></h2></a>
              <div class="inventory-content">
                   <?php the_excerpt(); ?>
                   <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'starkers-master' ) . '&after=</div>') ?>
                   <?php edit_post_link( __( 'Edit', 'starkers-master' ), '<span class="edit-link">', '</span>' ) ?>
              </div>
          </div>
        </article>
    <?php
    }
  }
  else {
    echo 'No tractors were found.';
  }  
  ?>
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
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>