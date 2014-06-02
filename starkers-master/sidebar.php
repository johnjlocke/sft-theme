<div class="sidebar" role="complementary">
    <div class="sidebar-innerwrap">

    <?php if (function_exists('register_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

    	<?php get_search_form(); ?>
    
    	<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
    <?php endif; ?>
     <article class="sidebar-specials">
<?php
  $args = array(
		'post_type' => 'specials',
                'showposts' => 3 
	);
  $specials = new WP_Query( $args );
  if( $specials->have_posts() ) {
      while( $specials->have_posts() ) {
	$specials->the_post(); ?>
       <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
         <h1 class="entry-title"><?php the_title(); ?></h1>
           <div class="entry-content">
           <?php the_excerpt(); ?>
           <a href="<?php the_permalink(); ?>" class="specials-link">Learn More</a>
           <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'starkers-master' ) . '&after=</div>') ?>
             <?php edit_post_link( __( 'Edit', 'starkers-master' ), '<span class="edit-link">', '</span>' ) ?>
           </div>
       </div>
       <?php
          }
       }
       else {
	  echo 'Contact SFT to hear about our current Promotions.';
       }
	?>
   </article>
     </div><!-- END INNER DIV -->
</div>