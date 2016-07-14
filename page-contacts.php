<?php get_header(); ?>
<div class="contacts">	
	<div class="contacts__wrapper">
		<h1 class="page-header">Контакты</h1>
		<form class="contacts__form">
			<input type="text" placeholder="имя">
			<input type="email" placeholder="email">
			<input type="tel" placeholder="телефон">
			<textarea rows="10" placeholder="сообщение"></textarea>
		</form>
	</div>
	<div class="contacts__map" id="map"></div>			
</div>
<?php get_footer(); ?>
