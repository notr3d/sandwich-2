<?php get_header(); ?>
<div class="contacts">	
	<div class="contacts__wrapper">
		<div class="contacts__container">
			<h1 class="contacts__header">Контакты</h1>
			<form class="contacts__form">
				<input type="text" placeholder="имя">
				<input type="email" placeholder="email">
				<input type="tel" placeholder="телефон">
				<textarea rows="10" placeholder="сообщение"></textarea>
				<input type="submit" placeholder="Отправить">
			</form>
		</div>
		<div class="contacts__map" id="map"></div>			
	</div>
</div>
<?php get_footer(); ?>
