$(document).ready(function() {
/*==== These Functions are concerned with the navigation and menu ======*/
	(function () {
		let is_small_screen = () => window.matchMedia ('(max-width: 991px)').matches;
		handle_nav(is_small_screen());
		adjust_carousel_imgs();
		window.onresize = () => {
			handle_nav(is_small_screen());
			// adjust_carousel_imgs(is_small_screen());
		}
	})();


	/*function below takes true or false
	*for small or large screens respectively
	*/
	function handle_nav (screen_bool) {
		handleSideNav();
		if (!screen_bool) {
			handleNavOnScroll();
		}
	}
	/* =====These functions handle the sticky top navbar  */

	function make_sticky_nav () {
		if (window.pageYOffset >= 43) {
			$('header.full-nav #sticky-nav').addClass('px-3 sticky')
			$('header.full-nav #top-nav #contacts-ul').removeClass('mb-2')
			$('header.full-nav nav').removeClass('paper-box-shadow')
			$('header.full-nav + main').css({
				'padding-top': '43px',
			});
		}else  {
			$('header.full-nav #sticky-nav').removeClass('px-3 sticky')
			$('header.full-nav #top-nav #contacts-ul').addClass('mb-2')
			$('header.full-nav nav').addClass('paper-box-shadow')
			$('header.full-nav + main').css({
				'padding-top': '0px',
			});
		}
	}
	function handleNavOnScroll () {
		let scrollTop = $(window).scrollTop();
		$(window).scroll(function(e) {
			make_sticky_nav ();
		});
	}
	/* =====This is the end of functions that handle the sticky top navbar  */


	/* =====These functions handle the sidebar */
	function openSideBar () {
		$(".side-menu-overlay").css({
			'right':'0'
		});
		$(".side-menu-overlay").addClass('show-sidebar');
	}
	function closeSideBar () {
		$(".side-menu-overlay").css({
			'right':'-100vw'
		});
		$(".side-menu-overlay").removeClass('show-sidebar');
	}
	function toggleSideNav() {
		if (!$(".side-menu-overlay").hasClass('show-sidebar')) {
			openSideBar();
		}else {
			closeSideBar();
		}
	}
	function handleSideNav () {
		$('.nav-toggler').click(function(e) {
			toggleSideNav()
		});
		$(".side-menu-overlay").click(function(e) {
			toggleSideNav();
		});
		$(".side-menu").click(function(e) {
			e.stopPropagation();
		});
	}
	/* ===== This is the end of sidebar functions =====*/


/*==== This is the end of navigation and menu functions ======*/

/*==== This portion will handle the carousels or slider functions ======*/

	/*===== This will change carousel images based on screen size ======*/

	function adjust_carousel_imgs (screen_bool) {
		// if(!screen_bool) {
		// 	$('.slide-img').each(function(index, el) {
		// 		el.src = el.src.replace(/.jpg/,'-sm.jpg')
		// 		console.log(el);
		// 	});
		// }
		// if(screen_bool) {
		// 	$('.slide-img').each(function(index, el) {
		// 		el.src = el.src.replace(/-sm.jpg/,'.jpg')
		// 		console.log(el);
		// 	});
		// }
	}
/*==== This is the end of the carousel or slider functions ======*/

	/*===== This will handle popper like drop downs like in the privacy policy page ======*/
		
    $(".dropper").click(function(){
        $(this).find('.drop').toggleClass('d-none')
        $(this).find('.link').toggleClass('d-none')
    });
     
})