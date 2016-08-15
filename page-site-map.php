<?php get_header(); ?>
<div class="site-map">				
	<article>
		<section>
			<h1 class="section-header">Карта сайта</h1>
			<?php wp_nav_menu(array(
				'theme_location' => 'site-map',
				'container_class' => 'site-map__item',
				'menu_class' => 'site-map__list'
			)); ?>
		</section>
	</article>
</div>
<?php get_footer(); ?>
