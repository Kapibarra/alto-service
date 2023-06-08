$(function() {
	$("[data-scroll]").on("click", function(event) {
		event.preventDefault();

		var th = $(this),
		nav = $("nav a"),
		blockId = th.data('scroll'),
		blockOffset = $(blockId).offset().top;
		nav.removeClass("active");
		th.addClass("active");

		$("html, body").animate({
			scrollTop: blockOffset
		}, 100);
	});

	$("#navbarSupportedContent").on('show.bs.collapse', function() {
		$('a.nav-link').click(function() {
			$("#navbarSupportedContent").collapse('hide');
		});
	});

});


