$(function () {
	$(".menu-button").click(function () {
		$(".p-sidebar__button").addClass("p-sidebar__button--open")
		// $(".p-sidebar-button").addClass("p-sidebar-button--open")
		$(".p-sidebar-button__line").addClass("p-sidebar-button__line--open");
		$(".c-wrapper").fadeIn();
		$(".l-sidebar").addClass("l-sidebar--open");
		$("body").addClass("stop");
	});
	$(".p-sidebar__button").click(function () {
		$(".p-sidebar__button").removeClass("p-sidebar__button--open")
		// $(".p-sidebar-button").removeClass("p-sidebar-button--open");
		$(".p-sidebar-button__line").removeClass("p-sidebar-button__line--open");
		$(".c-wrapper").fadeOut();
		$(".l-sidebar").removeClass("l-sidebar--open");
		$("body").removeClass("stop");
	});
	$(window).resize(function () {
		let $window = $(this).width();
		let bp = 1025;

		if ($window > bp) {
			$(".p-sidebar__button").removeClass("p-sidebar__button--open")
			$(".p-sidebar-button").removeClass("p-sidebar-button--open");
			$(".p-sidebar-button__line").removeClass("p-sidebar-button__line--open");
			$(".c-wrapper").fadeOut();
			$(".l-sidebar").removeClass("l-sidebar--open");
			$("body").removeClass("stop");
		}
	});
	/* 読み込み時の画面サイズによって幅が変わるため今回は不使用 */
	// let w1 = $("aside").outerWidth(true);
	// console.log(w1);
	// let w2 = (w1-15);
	// $(".p-sidebar__button").width(w2);
	// console.log(w2);
	// let w3 = $(".p-sidebar").outerWidth(true);
	// console.log(w3);
	// let w4 = $("body").outerWidth(true);
	// console.log(w4);
	// let w5 = $("aside").outerWidth(true);
	// console.log(w5);
})