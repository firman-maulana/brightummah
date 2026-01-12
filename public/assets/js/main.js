(function ($) {
	"use strict";

	var windowOn = $(window);
	///////////////////////////////////////////////////
	// 01. PreLoader Js
	$(window).on('load',function () {
		$('#it-loading').fadeOut(500);
	});

	// 08. Nice Select Js
	$('select').niceSelect();

	///////////////////////////////////////////////////
	//  Sticky Header Js
	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 400) {
			$("#header-sticky").removeClass("header-sticky");
		} else {
			$("#header-sticky").addClass("header-sticky");
		}
	});

	if ($('.it-header-height').length > 0) {
		var headerHeight = document.querySelector(".it-header-height");
		var setHeaderHeight = headerHeight.offsetHeight;
		$(".it-header-height").each(function () {
			$(this).css({
				'height': setHeaderHeight + 'px'
			});
		});

		$(".it-header-height .header-sticky").each(function () {
			$(this).css({
				'height': inherit,
			});
		});
	}

	// Nice Select Js
	$('select').niceSelect();

	//  Data CSS Js
	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});

	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});

	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));
	});

	// accordion
	$(".accordion-items").on("click", function () {
		if ($(this).hasClass("active")) {
			$(this).removeClass("active");
		} else {
			$(this).addClass("active").siblings().removeClass("active");
		}
	});


	////////////////////////////////////////////////////
	// Counter Js
	if ($(".purecounter").length) {
		new PureCounter({
			filesizing: true,
			selector: ".filesizecount",
			pulse: 2,
		});
		new PureCounter();
	}
	////////////////////////////////////////////////////
	//  magnificPopup Js
	$('.popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	////////////////////////////////////////////////////
	//  MagnificPopup video view Js
	$(".popup-video").magnificPopup({
		type: "iframe",
	});

	////////////////////////////////////////////////////
	//  isotope
	$('.grid').imagesLoaded(function () {
		// init Isotope
		var $grid = $('.grid').isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
			masonry: {
				columnWidth: '.grid-item',
			},

		});
		// filter items on button click
		$('.masonary-menu').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({
				filter: filterValue,
				animationOptions: {
					duration: 100,
					easing: "linear",
					queue: true
				}
			});

		});
		//for menu active class
		$('.masonary-menu button').on('click', function (event) {
			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
			event.preventDefault();
		});

	});


	if ($('.it-menu-content').length && $('.it-menu-mobile').length) {
		let navContent = document.querySelector(".it-menu-content").outerHTML;
		let mobileNavContainer = document.querySelector(".it-menu-mobile");
		mobileNavContainer.innerHTML = navContent;

		let arrow = $(".it-menu-mobile .has-dropdown > a");

		arrow.each(function () {
			let self = $(this);
			let arrowBtn = document.createElement("BUTTON");
			arrowBtn.classList.add("dropdown-toggle-btn");
			arrowBtn.innerHTML = "<i class='fal fa-angle-right'></i>";
			self.append(function () {
				return arrowBtn;
			});

			self.find("button").on("click", function (e) {
				e.preventDefault();
				let self = $(this);
				self.toggleClass("dropdown-opened");
				self.parent().toggleClass("expanded");
				self.parent().parent().addClass("dropdown-opened").siblings().removeClass("dropdown-opened");
				self.parent().parent().children(".it-submenu").slideToggle();
			});

		});
	}

	///////////////////////////////////////////////////
	// scroll-to-target 
	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 500) {
			$('.scroll-to-target').removeClass('open');

		} else {
			$('.scroll-to-target').addClass('open');
		}
	});

	///////////////////////////////////////////////////
	// Scroll Up Js
	if ($('.scroll-to-target').length) {
		$(".scroll-to-target").on('click', function () {
			var target = $(this).attr('data-target');
			// animate
			$('html, body').animate({
				scrollTop: $(target).offset().top
			}, 1000);

		});
	}

	////////////////////////////////////////////////////
	// Sidebar Js
	$(".it-menu-bar").on("click", function () {
		$(".itoffcanvas").addClass("opened");
		$(".body-overlay").addClass("apply");
	});
	$(".close-btn").on("click", function () {
		$(".itoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});
	$(".body-overlay").on("click", function () {
		$(".itoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
		$(".search__popup").removeClass("search-opened");
	});

	////////////////////////////////////////////////////
	//  Search Js
    if($('.search-box-outer').length) {
		$('.search-box-outer').on('click', function() {
			$('.search-popup').addClass('search-active');
			$(".body-overlay").addClass("apply");
		});
		$('.close-search').on('click', function() {
			$('.search-popup').removeClass('search-active');
			$(".body-overlay").removeClass("apply");
		});
	}

	///////////////////////////////////////////////////
	// wow animation
	var wow = new WOW(
		{
		  mobile: true,
		}
	  );
	wow.init();
	var windowOn = $(window);


	////////////////////////////////////////////////////
	//  Cart Quantity Js
	$('.cart-minus').on('click', function () {
		var $input = $(this).parent().find('input');
		var count = Number($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});

	$('.cart-plus').on('click', function () {
		var $input = $(this).parent().find('input');
		$input.val(Number($input.val()) + 1);
		$input.change();
		return false;
	});


	// Show Login Toggle Js
	$('#showlogin').on('click', function () {
		$('#checkout-login').slideToggle(900);
	});

	$('#cbox').on('click', function () {

		$('#cbox_info').slideToggle(900);
	
	});

	$('#showcoupon').on('click', function () {

		$('#checkout_coupon').slideToggle(900);
	});

	// for range
	$(".slider-range").slider({
		range: true,
		min: 0,
		max: 1200,
		values: [80, 700],
		slide: function (event, ui) {
			$(".amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
		}
	});
	$(".amount").val("$" + $(".slider-range").slider("values", 0) +
		" - $" + $(".slider-range").slider("values", 1));


	//One Page navigation
	function scrollNav() {
		$('.it-onepage-menu li a').on('click', function () {
			$(".it-onepage-menu li a").removeClass("active");
			$(this).addClass("active");

			$('html, body').stop().animate({
				scrollTop: $($(this).attr('href')).offset().top - 80
			}, 300);
			return false;
		});
	}
	scrollNav();

	// price tab
	if ($('#lineMarker').length > 0) {

		function it_tab_bg() {
			let marker = document.querySelector('#lineMarker');
			let item = document.querySelectorAll('.it-marker-tab ul li button');
			let itemActive = document.querySelector('.it-marker-tab ul li .nav-links.active');
			function indicator(e) {
				marker.style.left = e.offsetLeft + "px";
				marker.style.width = e.offsetWidth + "px";
			}
			item.forEach(link => {
				link.addEventListener('click', (e) => {
					indicator(e.target);
				});
			});

			let activeNav = $('.it-marker-tab ul li .nav-links.active');
			let activewidth = $(activeNav).width();
			let activePadLeft = parseFloat($(activeNav).css('padding-left'));
			let activePadRight = parseFloat($(activeNav).css('padding-right'));
			let totalWidth = activewidth + activePadLeft + activePadRight;

			let precedingAnchorWidth = anchorWidthCounter();


			$(marker).css('display', 'block');

			$(marker).css('width', totalWidth);

			function anchorWidthCounter() {
				let anchorWidths = 0;
				let a;
				let aWidth;
				let aPadLeft;
				let aPadRight;
				let aTotalWidth;
				$('.it-marker-tab ul li button').each(function (index, elem) {
					let activeTest = $(elem).hasClass('active');
					marker.style.left = elem.offsetLeft + "px";
					if (activeTest) {
						return false;
					}
					a = $(elem).find('button');
					aWidth = a.width();
					aPadLeft = parseFloat(a.css('padding-left'));
					aPadRight = parseFloat(a.css('padding-right'));
					aTotalWidth = aWidth + aPadLeft + aPadRight;
					anchorWidths = anchorWidths + aTotalWidth;

				});

				return anchorWidths;
			}
		}
		it_tab_bg();
	}	

	// testimonial-2 slick
	$('.it-testimonial-3-active').slick({
		vertical: true,
		verticalSwiping: true,
		slidesPerRow: 2,
		slidesToShow: 3,
		autoplay: true,
		autoplaySpeed: 0,
		speed: 3000,
		arrows: false,
		dots: false,
		cssEase: 'ease',

		// responsive breakpoints
		responsive: [
			{
			breakpoint: 1200, 
			settings: {
				slidesToShow: 2, 
				slidesPerRow: 1,
			}
			},
			{
			breakpoint: 768, 
			settings: {
				slidesToShow: 2, 
				slidesPerRow: 1,
			}
			}
		]

	});

	//  filter 
	$(".it-course-filter-button").on("click", function () {
		$(".it-course-filter-dropdown-area").toggleClass('it-filter-dropdown-opened');
	});

	$(function () {
		$(".it-course-filter-open-button").on("click", function () {
			$(".it-course-filter-dropdown-style-2").slideToggle(500);
		});
	});


	
	// scroll nav class add
    if ($('#course_details2_nav').length > 0) {
        $('#course_details2_nav').onePageNav({
            currentClass: 'current',
            scrollSpeed: 750,
            scrollThreshold: 0.5,
        });
    }
    // class add
    $('.it-course-details-nav-box nav ul li').on('click', function () {
        $(this).addClass('current').siblings().removeClass('current');
    });

	// Parallax Js
	if ($('.scene').length > 0) {
		$('.scene').parallax({
			scalarX: 5.0,
			scalarY: 5.0,
		});
	};
	if ($('.scene-y').length > 0) {
		$('.scene-y').parallax({
			scalarY: 5.0,
			scalarX: 0,
		});
	};
	 
})(jQuery);
