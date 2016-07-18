<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:400,700&subset=cyrillic" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/odometer-theme-default.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="site">
	<header class="site-header">
		<div class="site-header__wrapper lcw">
			<div class="site-header__item">
				<a href="<?php echo get_permalink( get_page_by_title('главная')->ID ); ?>" class="site-logo"></a>
			</div>
			<div class="site-header__item fast-links">
				<div class="fast-links__item">
					<a href="sandwich">Сэндвич-панели</a>
				</div>
				<div class="fast-links__item">					
					<a href="profnastil">Профнастил</a>
				</div>
				<div class="fast-links__item">					
					<a href="steel">Рулонная сталь</a>
				</div>	
			</div>
			<div class="site-header__item site-header__item--button">
				<button class="fancy-button callback__open">
					<span>Отправить заявку</span>
				</button>
			</div>
			<div class="site-header__item site-header-callback">
				<p class="site-header-callback__tel">+7 (495) 663-86-87</p>
				<button class="site-header-callback__button">Заказать обратный звонок</button>
				<p class="site-header-callback__hours">пн.-пт. с <b>9.00</b> до <b>18.00</b></p>
			</div>					
		</div>
		<?php wp_nav_menu(array(
			'theme_location' => 'header-nav',
			'container_class' => 'header-nav',
			'menu_class' => 'header-nav__wrapper lcw'
		)); ?>
	</header>
	<main class="site-content">
