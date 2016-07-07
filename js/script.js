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