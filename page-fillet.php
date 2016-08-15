<?php get_header(); ?>
<div class="fillet">				
	<article>
		<section>
			<h1 class="section-header"><span>Раскладка</span> сэндвич-панелей</h1>
			<p>Раскладка сэндвич панелей - чертежи входящие в состав раздела проекта АР (Архитектурные решения) на основании которых генподрядная (подрядная) организация размещает заказ у производителя сэндвич панелей. Все сэндвич панели на чертежах обозначаются конкретной цифрой с привязкой к мету монтажа.  На основании раскладки сэндвич панелей монтажники производят работы по монтажу сэндвич панелей.</p>
			<p>Специалисты конструкторского отдела компании «Новый Формат» выполняют раскладку панелей по проекту, полученному от клиента. Также они всегда смогут предоставить рекомендации по выбору узлов крепления сэндвич-панелей и фасонных элементов.</p>
			<p class="text text--red text--bold text--warning">Для своих клиентов мы производим раскладку бесплатно.</p>
			<div class="container container--center">
				<a href="<?php echo get_permalink( get_page_by_title('цены')->ID ); ?>" class="fancy-button fancy-button--yellow fancy-button--big"><span>Узнать цену</span></a>
				<button class="fancy-button fancy-button--orange fancy-button--big callback__open"><span>Перезвонить мне</span></button>
			</div>
			<img style="margin-top: 45px" src="<?php echo get_template_directory_uri(); ?>/img/fillet/pic.jpg" alt="">
		</section>
	</article>
	<!--<div class="consult">
		<div class="consult__wrapper lcw">
			<h2 class="consult__header">Для того, чтобы купить стеновые сэндвич-панели «Новый Формат», заполните форму заказа или свяжитесь с нашим оператором по телефону:</h2>
			<p class="consult__tel">8 (495) 663-86-87</p>
			<button type="button" class="fancy-button fancy-button--yellow callback__open"><span>Оставить заявку</span></button>
		</div>
	</div>-->
</div>
<?php get_footer(); ?>
