$(document).ready(function() {
 	
	// Define variables
	var backToTop = '.back-to-top'
	var headerSlide = '.content-slider'
	var contentSidebar = '.content-sidebar'

	// Define Status
	$(backToTop).hide()

 	// Header Slide Carousel
	$(headerSlide).owlCarousel({
		items : 1,
		responsive: true,
		navigation: false,
		navigationText: false,
		lazyLoad : true,
		autoPlay: 3000
	});

	// Back to Top
	$(window).on('scroll', function() {
		if ($(window).scrollTop() > 400) {
			$(backToTop).fadeIn();
		} else {
			$(backToTop).fadeOut();
		}
	});

	// Back to Top smooth
	$(backToTop).click(function() {
		$("html, body").animate({scrollTop:0}, "slow");
		return false;
	})

	// Sidebar Float
	// $(window).on('scroll', function() {
	// 	var sidebarHeight = ($('.content-sidebar').height() / 5) * 3;
	// 	var footerHeight = $('.footer').height();
	// 	var viewportHeight = $(window).scrollTop() + 160;
	// 	var documentHeight = $(document).height();

	// 	var viewportPlusFooter = viewportHeight + (footerHeight * 2);
	// 	var documentMinFooter = documentHeight - footerHeight + footerHeight;

	// 	if (viewportHeight > sidebarHeight) {
	// 		$(contentSidebar).css('position', 'fixed');
	// 		$(contentSidebar).css('width', '27%');
	// 		$(contentSidebar).css('margin-top', 0 - (sidebarHeight / 2));
	// 	} else if (viewportHeight < sidebarHeight ){
	// 		$(contentSidebar).css('position', 'relative');
	// 		$(contentSidebar).css('width', '30%');
	// 		$(contentSidebar).css('margin-top', '0')
	// 	}
	// 	if (viewportPlusFooter > documentMinFooter) {
	// 		$(contentSidebar).css('position', 'absolute');
	// 		$(contentSidebar).css('display', 'block');
	// 		$(contentSidebar).css('width', '30%');
	// 		$(contentSidebar).css('margin-top', sidebarHeight + (sidebarHeight) + (sidebarHeight / 3));
	// 	} else {
	// 		$(contentSidebar).css('position', 'relative');
	// 		$(contentSidebar).css('width', '30%');
	// 		$(contentSidebar).css('margin-top', '0')
	// 	}

	// 	// Debug //
	// 	// console.log(viewportPlusFooter + ' - ' + documentMinFooter); 
	// })

});