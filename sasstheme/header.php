<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.cdnfonts.com/css/sofia-pro" rel="stylesheet">
    <title><?php bloginfo('name'); echo ' | '; bloginfo('description');?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <?php wp_head(); ?>
</head>
<body>

<header id="header" class="main-header">
	<div class="container-fluid">
        <div id="header-image">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
               <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" width="" height="" />
            </a>
        </div>
        
        <div class="menu">
        	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class'     => 'nav navbar-nav', 'container_id'   => 'bs-example-navbar-collapse-1' )); ?> 
        </div>
        
    </div>
</header>

