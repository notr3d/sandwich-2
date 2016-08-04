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
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="site">
	<header class="site-header">
		<div class="site-header__wrapper lcw">
			<div class="site-header__item site-header__item--logo">
				<a href="<?php echo get_permalink( get_page_by_title('главная')->ID ); ?>" class="site-logo"></a>
			</div>
			<div class="site-header__item fast-links">
				<div class="fast-links__item">
					<a href="<?php echo get_permalink( get_page_by_title('Сэндвич-панели')->ID ); ?>">Сэндвич-панели</a>
				</div>
				<div class="fast-links__item">					
					<a href="<?php echo get_permalink( get_page_by_title('Профнастил')->ID ); ?>">Профнастил</a>
				</div>
				<div class="fast-links__item">					
					<a href="<?php echo get_permalink( get_page_by_title('Рулонная сталь')->ID ); ?>">Рулонная сталь</a>
				</div>	
			</div>
			<div class="site-header__item site-header__item--button">
				<button class="fancy-button callback__open">
					<span>Отправить заявку</span>
				</button>
			</div>
			<div class="site-header__item site-header-callback">
				<p class="site-header-callback__tel"><span>+7 (495)</span> 663-86-87</p>
				<button class="site-header-callback__button">Заказать обратный звонок</button>
				<p class="site-header-callback__hours">пн. - пт. с <b>9.00</b> до <b>18.00</b></p>
			</div>					
		</div>
		<?php wp_nav_menu(array(
			'theme_location' => 'header-nav',
			'container_class' => 'header-nav',
			'menu_class' => 'header-nav__wrapper'
		)); ?>
	</header>
	<main class="site-content">
