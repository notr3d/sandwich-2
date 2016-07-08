$(document).ready(function(){
	var siteNavSlideBtn = $('.site-nav-menu__slide')
	siteNavSlideBtn.click(function(e){
		e.preventDefault();
		var id = $(this).parents('.site-nav-menu__item');
		id = id.attr('id');
		id = id.split('--');
		id = id[1];
		id = '#submenu-' + id;
		var submenu = $(id);
		submenu.siblings().removeClass('active');
		submenu.toggleClass('active');	
	});
	/*var siteNavItem = $('.site-nav-menu__inner');
	siteNavItem.hover(function(){
		var className = $(this).parents('.site-nav-menu__item');
		className = className.attr('id');
		className = className.split('--');
		className = className[1];
		className = 'site-nav--' + className;	
		var bg = $('.site-nav');
		bg.animate;
	});*/
});

//кнопка вверх
$('.up').click(function(){
	$('body').animate({scrollTop: 0}, 300);
	return false;
});

{
	function initUP() {
		window.addEventListener('scroll', function(e){
			var distanceY = window.pageYOffset || document.documentElement.scrollTop,
				shrinkOn = 200,
				scrollup = $('.up');
			if (distanceY > shrinkOn) {
				$(scrollup).addClass('up--visible');
				
			} else {
				if (scrollup.hasClass('up--visible')) {
					scrollup.removeClass('up--visible');
				}
			}
		});
	}
	window.onload = initUP();
}