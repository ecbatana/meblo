$(document).ready(function() {
 	// Hide responsive menu first
 	$('#header .nav ul.responsive-menus').hide();

 	// and hide the top nav search form too ..
 	$('#header .nav .search-box').hide();

	// Responsive toggler
	$('#header .nav a.responsive-toggler').on('click', function(e) {
		e.preventDefault();
	 	$('#header .nav ul.responsive-menus').slideToggle();
	});

	// Search Button toggler
	$('#header .nav a.search-toggler').on('click', function(e) {
		e.preventDefault();
	 	$('#header .nav .search-box').slideToggle();
	})
});