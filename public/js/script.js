// JQUERY
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
// END OF JQUERY


// JAVASCRIPT
document.getElementById('scrollToTopButton').addEventListener('click', scrollUp);
function scrollUp() {
	window.scrollTo({
		top: 0,
		behavior: 'smooth'
	})
};


document.getElementById('scrollToContent').addEventListener('click', scrollToContent);
function scrollToContent() {
	window.scrollTo({
		top: 730,
		behavior: 'smooth'
	})
};
// END OF JAVASCRIPT

