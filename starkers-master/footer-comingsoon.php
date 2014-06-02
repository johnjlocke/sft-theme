    <footer class="footer">     
		<p class="copyright">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
        
	</footer>

	<?php wp_footer(); ?>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46213618-1', 'sacramentofortractors.net');
  ga('send', 'pageview');

</script>
	</body>
</html>    <footer class="footer">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-navigation' ) ); ?>
		<p class="copyright">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
                <p class="design-by">Site by <a href="http://www.lockedowndesign.com" rel="designer follow">Lockedown Design</a></p>
	</footer>
        <!-- MOBILE MENU TOGGLE -->
        <script type="text/javascript">
        jQuery('#mobile-toggle').toggle(function() {
  	     jQuery('#menu-primary-navigation').slideDown(500);
  	     jQuery(this).addClass('active');
       },
       function() {
  	     jQuery('#menu-primary-navigation').slideUp(400);
  	     jQuery(this).removeClass('active');
       });

       jQuery(window).resize(function() {
  	     var viewport_width = jQuery(window).width();
  	     if(viewport_width > 768) {
	  	     jQuery('#menu-primary-navigation').show();
  	     }
       });
       </script>
       <script src="/wp-content/themes/starkers-master/js/superfish.js"></script>
       <script src="/wp-content/themes/starkers-master/js/hoverIntent.js"></script>
       <script>
	  jQuery(document).ready(function() {
		jQuery('ul.sf-menu').superfish({
			delay:       1000,                            
			animation:   {opacity:'show',height:'show'},  
			speed:       'fast',                          
			autoArrows:  false                            
		});
	});
        </script>
	<?php wp_footer(); ?>
        <script>
 	 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	 ga('create', 'UA-46213618-1', 'sacramentofortractors.net');
  	 ga('send', 'pageview');

        </script>
	</body>
</html>