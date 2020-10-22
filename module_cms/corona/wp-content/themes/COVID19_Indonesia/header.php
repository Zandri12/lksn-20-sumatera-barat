<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
      
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </div>

       
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php
       
        wp_nav_menu( 
            array(
                'menu'              => 'primary',
                'theme_location'    => 'primary_menu',
                'depth'             => 2,
                'container'         => false,
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
            )
        );
        ?>
        </div>
       
    </div>
   
</nav>
