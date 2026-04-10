$(function () {
	/* Inits */
	initBodyScroll();
	initMore();
	initLazy();
	showAllSpeakers();

	function showAllSpeakers() {

		let button 		= document.querySelector('.speakers__more'),
				speakers 	= document.querySelectorAll('.speakers__col'),
				i  				= 0;

		while ( i < 6 ) {
			speakers[i].removeAttribute('data-more-hidden'); i++;
		}

		button.onclick = function() {
			for ( let speaker of speakers) {
				speaker.removeAttribute('data-more-hidden');
			}
			window.scrollBy(0, 1);
			this.classList.add('d-none');
		}
	}	

	/* BodyScroll */
	function initBodyScroll() {
		$(document).on('scroll init.scroll', function (event) {
			var
			scroll_top = $(this).scrollTop(),
			header_height = $('.header').height()
			;

			$('body').toggleClass('page-scrolled', scroll_top > header_height);
		})
	}


	/* Themes */
	$('.themes-swiper').each(function(index, el) {
		const swiperGroup4 = new Swiper('.themes-swiper', {
			direction: 'horizontal',
			loop: false,
			autoplay: false,
			slidesPerView: 'auto',
			slidesPerGroup: 1,
			spaceBetween: 28,
			allowTouchMove: true,
			watchOverflow: true,
			mousewheel: {
				forceToAxis: true,
			},
			navigation: {
				nextEl: $('.themes__btn-prev'),
				prevEl: $('.themes__btn-next')
			},
			pagination: {
				el: $('.themes__pagination'),
				type: 'bullets'
			},
			breakpoints: {
				0: {
					slidesPerView: 'auto',
					slidesPerView: 1
				},
				575: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				991: {
					slidesPerView: 3,
					spaceBetween: 20,
				},
				1199: {
					slidesPerView: 4,
					spaceBetween: 20,
				},
				1599: {
					slidesPerView: 5,
				}
			}
		});
	});



	/* Resilts */
	$('.result__swiper').each(function(index, el) {

		if($(window).innerWidth() <= 767) {
			const swiperGroup4 = new Swiper('.result__swiper', {
				direction: 'horizontal',
				loop: false,
				autoplay: false,
				slidesPerGroup: 1,
				slidesPerView: 1,
				spaceBetween: 0,
				allowTouchMove: true,
				watchOverflow: true,
				mousewheel: {
					forceToAxis: true,
				},
				navigation: {
					nextEl: $('.result__btn-prev'),
					prevEl: $('.result__btn-next')
				},
				pagination: {
					el: $('.result__pagination'),
					type: 'bullets'
				}
			});
		}
	});


	/* Platform */
	$('.platform__swiper').each(function(index, el) {

		if($(window).innerWidth() <= 767) {
			const swiperGroup4 = new Swiper('.platform__swiper', {
				direction: 'horizontal',
				loop: false,
				autoplay: false,
				slidesPerView: 'auto',
				slidesPerGroup: 1,
				slidesPerView: 1,
				spaceBetween: 0,
				allowTouchMove: true,
				watchOverflow: true,
				mousewheel: {
					forceToAxis: true,
				},
				navigation: {
					nextEl: $('.platform__btn-prev'),
					prevEl: $('.platform__btn-next')
				},
				pagination: {
					el: $('.platform__pagination'),
					type: 'bullets'
				}
			});
		}
	});

	/* Partners */
	$('.partners__slider').each(function(index, el) {

		const swiperGroup4 = new Swiper('.partners__slider', {
			direction: 'horizontal',
			loop: false,
			slidesPerView: 2,
			spaceBetween: 30,
			navigation: {
				nextEl: '.swiper-button-prev',
				prevEl: '.swiper-button-next',
			},
			pagination: {
				el: '.swiper-pagination',
			},
			breakpoints: {
				575: {
				  slidesPerView: 3,
				  spaceBetween: 30,
				},
				767: {
					slidesPerView: 4,
					spaceBetween: 30,
				},
				1200: {
					slidesPerView: 5,
					spaceBetween: 60,
				}
			}
		});

	});

	$('.gallerey__slider').each(function(index, el) {

		const swiperGroup4 = new Swiper('.gallerey__slider', {
			direction: 'horizontal',
			loop: false,
			slidesPerView: 1,
			spaceBetween: 30,
			navigation: {
				nextEl: '.swiper-button-prev',
				prevEl: '.swiper-button-next',
			},
			pagination: {
				el: '.swiper-pagination',
			},
			breakpoints: {
				575: {
				  slidesPerView: 2,
				  spaceBetween: 30,
				},
				767: {
					slidesPerView: 3,
					spaceBetween: 30,
				}
			}
		});

	});

	/* Показать еще */
	function initMore() {

		$('[data-more-btn]').on('init.more click', function (event) {
			var
			$container = $('[data-more-options]', $(this).parent()),
			options = {},
			visible = 0,
			window_width = $(window).width(),
			$items
			;

			options = $container.data('more-options') || {}
			
			if (event.type == 'init' && window_width > 991) {
				visible = options.init;
			} else if  (event.type == 'init' && window_width > 767 && window_width <= 991) {
				visible = options.inittablet;
			} else if  (event.type == 'init' && window_width <= 767) {
				visible = options.initmobile;
			} else  if  (window_width > 991) {
				visible = options.desktop;
			} else  if  (window_width > 767 && window_width <= 991) {
				visible = options.tablet;
			} else  if  (window_width <= 767) {
				visible = options.mobile;
			}

			//console.dir($(options.target + '[data-more-hidden]'));
			
			$items = $(options.target + '[data-more-hidden]', $container);

			//console.dir($items);

			$items.slice(0, visible).removeAttr('data-more-hidden');

			$('html, body')
			.animate({ scrollTop: '+=1' }, 0)
			.animate({ scrollTop: '-=1' }, 0)
			;

			if ($items.length - visible <= 0) {
				$(this).addClass('d-none');
			}
		})
		.trigger('init.more');
	}





	/* Lazy */
	function initLazy() {

		let
		lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
		active = false,
		threshold = 200
		;

		const lazyLoad = function (e) {
			if (active === false) {
				active = true;

				setTimeout(function () {
					lazyArr.forEach(function (lazyObj) {
						if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

							if (lazyObj.dataset.src) {
								let
								img = new Image(),
								src = lazyObj.dataset.src
								;
								img.src = src;
								img.onload = function () {
									if (!!lazyObj.parent) {
										lazyObj.parent.replaceChild(img, lazyObj);
									} else {
										lazyObj.src = src;
									}
								}
								lazyObj.removeAttribute('data-src');
							}

							if (lazyObj.dataset.srcset) {
								lazyObj.srcset = lazyObj.dataset.srcset;
								lazyObj.removeAttribute('data-srcset');
							}

							lazyObj.classList.remove('lazy');
							lazyObj.classList.add('lazy-loaded');

							lazyArr = lazyArr.filter(function (obj) {
								return obj !== lazyObj;
							});

							if (lazyArr.length === 0) {
								document.removeEventListener('scroll', lazyLoad);
								window.removeEventListener('resize', lazyLoad);
								window.removeEventListener('orientationchange', lazyLoad);
							}
						}
					});

					active = false;
				}, 200);
			}
		};

		lazyLoad();

		document.addEventListener('scroll', lazyLoad);
		window.addEventListener('resize', lazyLoad);
		window.addEventListener('orientationchange', lazyLoad);
	}
});