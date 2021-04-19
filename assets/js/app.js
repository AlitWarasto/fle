/*
	app js for fledigital.com
	version 1.0
*/

$(document).ready(function(){
	/*Initialize Swiper*/
	var swiperWA = new Swiper('#sWA', {
		slidesPerView: 3,
		centeredSlides: false,
		spaceBetween: 30,
		loop: true,
	  autoplay: {
	    delay: 3000,
	    disableOnInteraction: true,
	  },
	  pagination: {
	    el: '.swap',
	  },
		breakpoints: {
			// when window width is >= 320px
			100: {
				slidesPerView: 1,
			},
			480: {
				slidesPerView: 2,
				spaceBetween: 20
			},
			// when window width is >= 480px
			720: {
				slidesPerView: 3,
				spaceBetween: 30
			},
			// when window width is >= 640px
		}
	});

	var swiper = new Swiper('#s5sw', {
		slidesPerView: 1,
		loop: true,
	  pagination: {
	    el: '.swiper-pagination',
	  },
	  autoplay: {
	    delay: 2500,
	    disableOnInteraction: true,
	  },
	});
});