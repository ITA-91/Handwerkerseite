var $ = jQuery.noConflict();

$(document).ready(function($) {
	"use strict";



	var winDow = $(window);
	var $container = $('.iso-call');
	var $filter = $('.filter');

	try {
		$container.imagesLoaded(function() {
			$container.trigger('resize');
			$container.isotope({
				filter: '*',
				layoutMode: 'masonry',
				animationOptions: {
					duration: 750,
					easing: 'linear'
				}
			});
		});
	} catch (err) {}

	winDow.bind('resize', function() {
		var selector = $filter.find('a.active').attr('data-filter');

		try {
			$container.isotope({
				filter: selector,
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false,
				}
			});
		} catch (err) {}
		return false;
	});

	$filter.find('a').click(function() {
		var selector = $(this).attr('data-filter');

		try {
			$container.isotope({
				filter: selector,
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false,
				}
			});
		} catch (err) {

		}
		return false;
	});


	var filterItemA = $('.filter li a');

	filterItemA.on('click', function() {
		var $this = $(this);
		if (!$this.hasClass('active')) {
			filterItemA.removeClass('active');
			$this.addClass('active');
		}
	});

	try {
		$.browserSelector();
		if ($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch (err) {

	}


	var searchToggle = $('.open-search'),
		inputAnime = $(".form-search"),
		body = $('body');

	searchToggle.on('click', function(event) {
		event.preventDefault();

		if (!inputAnime.hasClass('active')) {
			inputAnime.addClass('active');
		} else {
			inputAnime.removeClass('active');
		}
	});

	body.on('click', function() {
		inputAnime.removeClass('active');
	});

	var elemBinds = $('.open-search, .form-search');
	elemBinds.bind('click', function(e) {
		e.stopPropagation();
	});

	var clickElem = $('a.accord-link');

	clickElem.on('click', function(e) {
		e.preventDefault();

		var $this = $(this),
			parentCheck = $this.parents('.accord-elem'),
			accordItems = $('.accord-elem'),
			accordContent = $('.accord-content');

		if (!parentCheck.hasClass('active')) {

			accordContent.slideUp(400, function() {
				accordItems.removeClass('active');
			});
			parentCheck.find('.accord-content').slideDown(400, function() {
				parentCheck.addClass('active');
			});

		} else {

			accordContent.slideUp(400, function() {
				accordItems.removeClass('active');
			});

		}
	});


	try {
		if ($(".animated")[0]) {
			$('.animated').css('opacity', '0');
		}

		$('.triggerAnimation').waypoint(function() {
			var animation = $(this).attr('data-animate');
			$(this).css('opacity', '');
			$(this).addClass("animated " + animation);

		}, {
			offset: '75%',
			triggerOnce: true
		});
	} catch (err) {

	}

	if (winDow.width() < 992) {
		$('div.triggerAnimation').removeClass('animated');
		$('div.triggerAnimation').removeClass('triggerAnimation');
	}

	try {

		var SliderPost = $('.flexslider');

		SliderPost.flexslider({
			slideshowSpeed: 3000,
			easing: "swing"
		});
	} catch (err) {

	}


	var slidertestimonial = $('.bxslider');
	try {
		slidertestimonial.bxSlider({
			mode: 'vertical'
		});
	} catch (err) {}


	var submitContact = $('#submit_contact'),
		message = $('#msg');

	submitContact.on('click', function(e) {
		e.preventDefault();

		var $this = $(this);

		$.ajax({
			type: "POST",
			url: 'contact.php',
			dataType: 'json',
			cache: false,
			data: $('#contact-form').serialize(),
			success: function(data) {

				if (data.info !== 'error') {
					$this.parents('form').find('input[type=text],textarea,select').filter(':visible').val('');
					message.hide().removeClass('success').removeClass('error').addClass('success').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
				} else {
					message.hide().removeClass('success').removeClass('error').addClass('error').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
				}
			}
		});
	});


	(function() {

		var docElem = document.documentElement,
			didScroll = false,
			changeHeaderOn = 50;
		document.querySelector('header');

		function init() {
			window.addEventListener('scroll', function() {
				if (!didScroll) {
					didScroll = true;
					setTimeout(scrollPage, 100);
				}
			}, false);
		}

		function scrollPage() {
			var sy = scrollY();
			if (sy >= changeHeaderOn) {
				$('header').addClass('active');
			} else {
				$('header').removeClass('active');
			}
			didScroll = false;
		}

		function scrollY() {
			return window.pageYOffset || docElem.scrollTop;
		}

		init();

	})();

});

function initialize() {
	var map = new google.maps.Map(document.getElementById("map"), {
		center: { lat: 51.1670501, lng: 6.9475184 },
		zoom: 15,
	});
}

try {
	google.maps.event.addDomListener(window, 'load', initialize);
} catch (err) {

}