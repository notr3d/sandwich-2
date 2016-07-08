<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:400,700&subset=cyrillic" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="site">
	<header class="site-header">
		<div class="site-header__wrapper lcw">
			<a href="home" class="site-logo"></a>			
		</div>
		<?php wp_nav_menu(array(
			'theme_location' => 'header-nav',
			'container_class' => 'header-nav',
			'menu_class' => 'header-nav__wrapper lcw'
		)); ?>
	</header>
	<main class="site-content">
