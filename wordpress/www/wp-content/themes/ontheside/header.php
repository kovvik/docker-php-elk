<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="wrapper">
        <header id="masthead">
          <hgroup>	
          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>/"><?php bloginfo('name'); ?></a></h1>
	  <h2><?php bloginfo('description'); ?></h2>	
          </hgroup>
        </header>
