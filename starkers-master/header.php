<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php wp_title(); ?> | <?php bloginfo( 'name' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
                <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,700,300italic|Roboto+Condensed:400italic,400,700,700italic' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="http://www.sacramentofortractors.net/wp-content/themes/starkers-master/favicon.ico" type="image/x-icon">
                <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';</script>
		<?php wp_head(); ?>
                <style type="text/css"> @media screen only and (min-width: 1200px) {
                     #wpbody-content #dashboard-widgets .postbox-container { width: 100%; }
                     .empty-container {display: none;}
                }
                </style>
	</head>
	<body <?php body_class(); ?>>
	   <header class="header" role="banner">
              <div class="pre-header cf">
                <p class="sitename"><a href="http://www.sacramentofortractors.net" class="call">SacramentoForTractors.net</a></p>
                <p class="phonenumber"><a href="tel:19164544444" class="call">916-454-4444</a></p>
              </div>
              <nav class="nav" role="navigation">
                <h1 class="logo"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <div id="mobile-toggle" class="mobile-menu-toggle"></div>
                <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_class' => 'header-nav' ) ); ?>
	        <?php /* bloginfo( 'description' ); */ ?>
	        <?php /* get_search_form(); */ ?>
              </nav>
           </header>