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
	
//окно обр свзяи
var callbackOpen = $('.callback__open');	
var callbackBody = $('.callback');
var callbackClose = $('.callback__close');
callbackOpen.click(function(){
	callbackBody.addClass('callback--open');
});
callbackClose.click(function(){
	callbackBody.removeClass('callback--open');
});
	
//хедер
var headerNav = $('.header-nav');

$(window).bind('scroll', function(e){ 	
	var scrollTop = $(window).scrollTop();
	//var start = headerNav.offset().top;
	var start = 105;
	if (scrollTop > start) {
		headerNav.addClass('header-nav--fixed');		
	} else {
		headerNav.removeClass('header-nav--fixed');	
	};
	
});
	
//слайдер
$(".slider__container").owlCarousel();
	
//odometer
$(document).scroll(function(){
	var scrollTop = $(window).scrollTop();
	var windowHeight = $(window).outerHeight();
	if ($('.prod-capacity').length) { 
		var prodCapacity = $('.prod-capacity').offset().top;		
		var lastWasLower = false;
		if (scrollTop > prodCapacity - windowHeight && !lastWasLower){
			$('.prod-capacity__odometer').html('4000000');
			lastWasLower = true;
		}; 
	};
	if ($('.prod-capacity').length) {
		var growth = $('.growth').offset().top;
		var growthHeight = $('.growth').outerHeight();
		var growthFlag = false;
		if (scrollTop > growth - windowHeight + growthHeight / 2 && !growthFlag){
			$('.growth__bar').addClass('growth__bar--active');
			growthFlag = true;
		};
	};	
});

//price
var priceOpenBtn = $('#price-open');
priceOpenBtn.click(function(){
	var priceContainer = $('.price__container');
	priceContainer.toggle();
});
	
var menuCat = $('.menu-item-has-children');
	menuCat.append('<button type="button" class="header-nav__button"></button');
	var menuBtn = $('.header-nav__button');
	//menuBtn.prev().hide();
	menuBtn.click(function(){
		$(this).prev().toggle();
		$(this).toggleClass('header-nav__button--active');
		$(this).parent().siblings().find('.sub-menu').hide();
	});

//tabs
var tabs = $('.tabs');
var tabsControls = tabs.find('.tabs__controls').children();
var tabsContent = tabs.find('.tabs__content').children();
	
tabsControls.click(function(){
	$(this).addClass('active');
	$(this).siblings().removeClass('active');
	var id = $(this).index();
	var currentContent = tabsContent.eq(id);
	currentContent.addClass('active');
	currentContent.siblings().removeClass('active');
});
	
});

var priceAddConOpenBtn = $('.price__add');
priceAddConOpenBtn.click(function(){
	var priceAddCon = $('.price-add');
	priceAddCon.toggle();
})



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