$(function () {
	let clicked = 0;
	$('.mobile-menu-btn').click(function (e) {
		let screenHeight = $(window).height() - $('#mobile-nav').height('90vh');

		$(this).toggleClass('active');
		$('body').toggleClass('menu-active');

		if (clicked == 0) {
			$('nav').height(screenHeight);
			clicked = 1;
			return;
		}

		if (clicked == 1) {
			$('nav').removeAttr('style');
			clicked = 0;
			return;
		}
	});
});

function scrollUp() {
	window.scrollBy({
		top: -1400,
		behavior: 'smooth'
	});

}

function scrollDown() {
	window.scrollBy({
		top: 730,
		behavior: 'smooth'
	});

}


