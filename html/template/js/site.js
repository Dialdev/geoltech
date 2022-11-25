'use strict';
$(function() {
	// callback
	$('.header__feedback').click(function(){
		$('.feedback').fadeIn();
		$('.blackblock_call').fadeIn();
	});
	$('.button__close, .blackblock').click(function(){
		$('.feedback').fadeOut();
		$('.blackblock').fadeOut();
	});

	// input mask
	$(".input__phone").inputmask("+7 (999) 999-99-99");

	if (navigator.userAgent.indexOf('UCBrowser') > -1) {
		var link  = document.createElement('link');
		link.rel  = 'stylesheet';
		link.href = 'css/media_js.css';
		document.getElementsByTagName('head')[0].appendChild(link);
	}

	$('.content-menu._tabs a').on('click', function(e){
		var tabId = $(this).data('tabId');
		var p = $(this).parent('li');

		$('.tab-block').each(function(){
			$(this).removeClass('_show');
		})

		$('.content-menu._tabs li').each(function(){
			$(this).removeClass('active');
		});

		$(p).addClass('active');
		$('.tab-block[data-tab-id=' + tabId + ']').addClass('_show');

		e.preventDefault();
	})
});

(function () {
	var burgerToggle = function () {
		var burger = document.querySelector('.js-burger'),
			menu = document.querySelector('.js-menu');
		burger.addEventListener('click', function () {
			this.classList.toggle('isOpened');
			menu.classList.toggle('isOpened');
			document.body.classList.toggle('js-overFlow');
		})
	};
	var submenuToggle = function() {
		var breakpoint = window.matchMedia("(min-width: 730px)").matches;
		if (breakpoint) {
			var popupMenu = document.querySelector('.header__submenu');
			var parentNode = document.querySelector('.header__item_parent');
			var toggle = function (target, close) {
				if (close) {
					target.classList.toggle('js-isActive');
					popupMenu.classList.toggle('js-isShowed');
				} else {
					target.classList.remove('js-isActive');
					popupMenu.classList.remove('js-isShowed');
				}
			};
			document.addEventListener('scroll', function () {
				toggle(parentNode);
			});
			parentNode.addEventListener('click', function (evt) {
				if (this.classList.contains('js-isActive') === false)
					evt.preventDefault();
				toggle(this, true);
			})
		}
	};
	burgerToggle();
	submenuToggle();
})();
