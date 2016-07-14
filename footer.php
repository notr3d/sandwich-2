
	</main><!-- #content -->
	<footer class="site-footer">	
		<div class="site-footer__gradient"></div>
		<div class="site-footer__wrapper lcw">
			<div class="site-footer-nav">
				<div class="site-footer-nav__wrapper">
					<div class="site-footer-nav__column">
						<h3 class="site-footer-nav__header">Основное</h3>
						<?php wp_nav_menu(array(
							'theme_location' => 'footer-nav-1',
							'container_class' => 'site-footer-nav__item',
							'menu_class' => 'site-footer-nav__list'
						)); ?>
					</div>
					<div class="site-footer-nav__column">
						<h3 class="site-footer-nav__header">Продукция</h3>
						<?php wp_nav_menu(array(
							'theme_location' => 'footer-nav-2',
							'container_class' => 'site-footer-nav__item',
							'menu_class' => 'site-footer-nav__list'
						)); ?>
					</div>
					<div class="site-footer-nav__column">
						<h3 class="site-footer-nav__header">Услуги</h3>
						<?php wp_nav_menu(array(
							'theme_location' => 'footer-nav-3',
							'container_class' => 'site-footer-nav__item',
							'menu_class' => 'site-footer-nav__list'
						)); ?>
					</div>
					<div class="site-footer-nav__column">
						<h3 class="site-footer-nav__header">О заводе</h3>
						<?php wp_nav_menu(array(
							'theme_location' => 'footer-nav-4',
							'container_class' => 'site-footer-nav__item',
							'menu_class' => 'site-footer-nav__list'
						)); ?>
					</div>
				</div>							
			</div>
			<div class="site-footer-address">
				<div class="site-footer-address__wrapper">
					<div class="site-footer-address__item"><span>Телефон:</span> +7 (495) 663-86-87</div>
					<div class="site-footer-address__item"><span>Email:</span> <a href="mailto:info@novform.ru">info@novform.ru</a></div>		
					<div class="site-footer-address__item"><span>Адрес:</span> г. Москва, ул. Авиамоторная, дом 50, строение 2</div>
				</div>
			</div>
		</div>
		<?php if (!is_page($page = "contacts")): ?>
			<div class="site-footer-map" id="map"></div>
		<?php endif; ?>
		<div class="site-footer-copy">
			<div class="site-footer-copy__wrapper lcw">
				<p class="site-footer-copy__text">© 2016 «Новый Формат»</p>
			</div>
		</div>
		<button type="button" class="up">↑</button>
	</footer>
	<div class="callback">
		<div class="callback__wrapper">
			<h2 class="callback__header">Отправить заявку</h2>
			<form action="" class="callback__form">
				<div class="callback__item">
					<input type="text" placeholder="Имя">
				</div>
				<div class="callback__item">
					<input type="tel" placeholder="Телефон">
				</div>
				<div class="callback__item">
					<input type="email" placeholder="E-mail">
				</div>	
				<div class="callback__item callback__item--big">
					<textarea></textarea>
				</div>	
				<div class="callback__item">
					<input type="submit" placeholder="Отправить">
				</div>					
			</form>
			<button class="callback__close">×</button>
		</div>
	</div>
</div><!-- #page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-vOBdjVqwgHav99Lw79O25RL04z5pq2c" type="text/javascript"></script>
<script>
	var center = new google.maps.LatLng(55.736095, 37.718121);
	var init = function(){
		var prop = {
			center: center,
			scrollwheel: false,
			zoom: 16,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById('map'), prop);
		var marker = new google.maps.Marker({
			position: center,
			icon: '<?php echo get_template_directory_uri(); ?>/img/map-icon.png',
			size: new google.maps.Size(20, 32)
		});
		marker.setMap(map);
	};
	google.maps.event.addDomListener(window, 'load', init);
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/odometer.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
