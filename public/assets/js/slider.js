(function ($) {
	"use strict";

	var windowOn = $(window);

	//  testimonial Swiper Js
	const testimonialswiper = new Swiper('.it-testimonial-active', {
		speed: 1000,
		effect: "cards",
		grabCursor: true,
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
		},
		cardsEffect: {
			perSlideRotate: 2,
			perSlideOffset: 6,
			slideShadows: false,
		},
		pagination: {
			el: ".it-testimonial-dots",
			clickable: true,
		},
		navigation: {
			prevEl: '.arrow-prev',
			nextEl: '.arrow-next',
		},
		loop: false, // 🔹 এখানে loop বন্ধ রাখো
	});


	//  testimonial Swiper Js
	const testimonial2swiper = new Swiper('.it-testimonial-2-active', {
		speed: 1500,
		loop: true,
		slidesPerView: 2,
		spaceBetween: 35,
		autoplay: true,
		breakpoints: {
			'1400': {
				slidesPerView: 2,
			},
			'1200': {
				slidesPerView: 2,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		pagination: {
			el: ".it-testimonial-dots",
			clickable: true,
		},
		navigation: {
			prevEl: '.arrow-prev',
			nextEl: '.arrow-next',
		},		
		
	});

	//  testimonial Swiper Js
	const courseswiper = new Swiper('.it-course-details-active', {
		speed: 1500,
		loop: true,
		slidesPerView: 1,
		spaceBetween: 35,
		autoplay: true,
		breakpoints: {
			'1400': {
				slidesPerView: 3,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		navigation: {
			prevEl: '.arrow-prev',
			nextEl: '.arrow-next',
		},		
		
	});

	//  testimonial Swiper Js
	const testimonial3swiper = new Swiper('.it-testimonial-4-active', {
		speed: 1500,
		loop: true,
		slidesPerView: 1,
		spaceBetween: 35,
		autoplay: true,	
		
	});

	//  testimonial Swiper Js
	const categoriesswiper = new Swiper('.it-categories-2-active', {
		speed: 1500,
		loop: true,
		slidesPerView: 5,
		spaceBetween: 35,
		autoplay: true,
		breakpoints: {
			'1400': {
				slidesPerView: 5,
			},
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		pagination: {
			el: ".it-testimonial-dots",
			clickable: true,
		},
		
	});

	//  testimonial Swiper Js
	const categories3swiper = new Swiper('.it-categories-3-active', {
		speed: 1500,
		loop: true,
		slidesPerView: 5,
		spaceBetween: 20,
		autoplay: true,
		breakpoints: {
			'1400': {
				slidesPerView: 5,
			},
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		pagination: {
			el: ".it-categories-dots",
			clickable: true,
		},
		
	});

	//  brand Swiper Js
	const brandswiper = new Swiper('.it-brand-active', {
		loop: true,
		freemode: true,
		slidesPerView: 'auto',
		spaceBetween: 85,
		centeredSlides: true,
		allowTouchMove: false,
		speed: 2500,
		autoplay: {
		  delay: 1,
		  disableOnInteraction: false,
		},
		
		breakpoints: {
			'1400': {
				slidesPerView: 5,
			},
			'1200': {
				slidesPerView: 5,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		
	});

	// brand-4 swiper js
	var brand4swiper = new Swiper(".it-brand-4-active", {
		loop: true,
		freemode: true,
		slidesPerView: 'auto',
		spaceBetween: 85,
		centeredSlides: true,
		allowTouchMove: false,
		speed: 2500,
		autoplay: {
		  delay: 1,
		  disableOnInteraction: true,
		},
		breakpoints: {
			'1400': {
				slidesPerView: 7,
			},
			'1200': {
				slidesPerView: 6,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 3,
			},
			'0': {
				slidesPerView: 2,
			},
		},
	}); 

	// brand-4 swiper js
	var brand5swiper = new Swiper(".it-brand-5-active", {
		loop: true,
		freemode: true,
		slidesPerView: 'auto',
		spaceBetween: 85,
		centeredSlides: true,
		allowTouchMove: false,
		speed: 2500,
		autoplay: {
		  delay: 1,
		  disableOnInteraction: true,
		},
		breakpoints: {
			'1400': {
				slidesPerView: 7,
			},
			'1200': {
				slidesPerView: 6,
			},
			'992': {
				slidesPerView: 5,
			},
			'768': {
				slidesPerView: 4,
			},
			'576': {
				slidesPerView: 3,
			},
			'0': {
				slidesPerView: 2,
			},
		},
	}); 
	// brand-4 swiper js
	var brand5swiper = new Swiper(".it-brand-6-active", {
		loop: true,
		freemode: true,
		slidesPerView: 'auto',
		spaceBetween: 20,
		centeredSlides: true,
		allowTouchMove: false,
		speed: 2500,
		autoplay: {
		  delay: 1,
		  disableOnInteraction: true,
		},
		breakpoints: {
			'1800': {
				slidesPerView: 7,
			},
			'1600': {
				slidesPerView: 6,
			},
			'1400': {
				slidesPerView: 6,
			},
			'1200': {
				slidesPerView: 5,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 3,
			},
			'0': {
				slidesPerView: 2,
			},
		},
	}); 

	// category-4 swiper js
	var category4swiper = new Swiper(".it-category-4-active", {
		speed: 1000,
		loop: true,
		slidesPerView: 5,
		spaceBetween: 35,
		autoplay: true,
		breakpoints: {
			'1400': {
				slidesPerView: 6,
			},
			'1200': {
				slidesPerView: 6,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 3,
			},
			'0': {
				slidesPerView: 2,
			},
		},
		navigation: {
			prevEl: '.arrow-prev',
			nextEl: '.arrow-next',
		},
		
	}); 

	// slider 01  Swiper Js
	const sliderswiper = new Swiper('.it-slider-active', {
		slidesPerView: 1,
		loop: true,
		autoplay: true,
		effect:'fade',
		autoplay: {
			delay: 4000,
		},
		pagination: {
			el: ".it-slider-dots",
			clickable: true,
		},
		navigation: {
			prevEl: '.arrow-prev',
			nextEl: '.arrow-next',
		},

	});

  // hero-slider

    var swiper = new Swiper('.it-hero-12-active', {
		slidesPerView: 1,
		loop: true,
		autoplay: true,
		effect:'fade',
		autoplay: {
			delay: 4000,
		},
		navigation: {
			prevEl: '.arrow-prev',
			nextEl: '.arrow-next',
		},

	});

	// Swiper Js
	var textsliderslider = new Swiper(".it-text-slider-active", {
		loop: true,
		freemode: true,
		slidesPerView: 'auto',
		spaceBetween: 0,
		centeredSlides: true,
		allowTouchMove: false,
		speed: 3500,
		autoplay: {
		  delay: 1,
		  disableOnInteraction: true,
		},
	}); 

	//  postbox Swiper Js
	const postBoxswiper = new Swiper('.postbox-thumb-slider-active', {
		speed: 1500,
		loop: true,
		slidesPerView: 1,
		spaceBetween: 20,
		autoplay: true,
		navigation: {
			prevEl: '.postbox-arrow-prev',
			nextEl: '.postbox-arrow-next',
		},
		
	})


	// first swiper (nav)
	var portfolio_author = new Swiper(".it-portfolio-nav-active", {
		loop: true,
		speed: 1200,
		spaceBetween: 15,
		slidesPerView: 1,
		freeMode: true,
		watchSlidesProgress: true,
	});

	// second swiper (main)
	var portfolio_content = new Swiper(".it-portfolio-active", {
		loop: true,
		speed: 1200,
		spaceBetween: 15,
		navigation: {
			prevEl: '.arrow-prev',
			nextEl: '.arrow-next',
		},
	});

	// Connect both Swipers
	portfolio_content.controller.control = portfolio_author;
	portfolio_author.controller.control = portfolio_content;



})(jQuery);