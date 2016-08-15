<?php get_header(); ?>
<div class="contacts">	
	<div class="contacts__wrapper lcw">
		<div class="contacts__container">
			<h1 class="section-header">Контакты</h1>
			<div class="contacts__item">
				<p>Телефон:</p>
				<p class="contacts__tel">+7 (495) 663-86-87</p>
			</div>
			<div class="contacts__item">
				<p>Электронная почта:</p>
				<p><a class="contacts__email" href="mailto:info@novform.ru" target="_blank">info@novform.ru</a></p>
			</div>
			<div class="contacts__item">
				<p>Адрес:</p>
				<p>111024, г. Москва,<br>ул. Авиамоторная, д. 50, стр. 2</p>
			</div>
			<div class="contacts__item">
				<p>Режим работы:</p>
				<p>Пн. - Пт. с 9:00 до 18:00</p>
			</div>
			<div class="contacts__item">
				<h2>Отправить сообщение</h2>
				<?php echo do_shortcode( '[contact-form-7 title="Контакты"]' ); ?>
				<!--<form class="contacts__form">
					<input type="text" placeholder="имя">
					<input type="email" placeholder="email">
					<input type="tel" placeholder="телефон">
					<textarea rows="10" placeholder="сообщение"></textarea>
					<input type="submit" placeholder="Отправить">
				</form>-->
			</div>			
		</div>
	</div>
	<div class="contacts__map" id="map"></div>			
</div>
<?php get_footer(); ?>
