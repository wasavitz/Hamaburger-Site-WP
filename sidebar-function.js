jQuery(function () {
	jQuery(".menu-button").click(function () {
		jQuery(".p-sidebar__button").addClass("p-sidebar__button--open")
		// jQuery(".p-sidebar-button").addClass("p-sidebar-button--open")
		jQuery(".p-sidebar-button__line").addClass("p-sidebar-button__line--open");
		jQuery(".c-wrapper").fadeIn();
		jQuery(".l-sidebar").addClass("l-sidebar--open");
		jQuery("body").addClass("stop");
	});
	jQuery(".p-sidebar__button").click(function () {
		jQuery(".p-sidebar__button").removeClass("p-sidebar__button--open")
		// jQuery(".p-sidebar-button").removeClass("p-sidebar-button--open");
		jQuery(".p-sidebar-button__line").removeClass("p-sidebar-button__line--open");
		jQuery(".c-wrapper").fadeOut();
		jQuery(".l-sidebar").removeClass("l-sidebar--open");
		jQuery("body").removeClass("stop");
	});
	jQuery(window).resize(function () {
		let jQuerywindow = jQuery(this).width();
		let bp = 1025;

		if (jQuerywindow > bp) {
			jQuery(".p-sidebar__button").removeClass("p-sidebar__button--open")
			jQuery(".p-sidebar-button").removeClass("p-sidebar-button--open");
			jQuery(".p-sidebar-button__line").removeClass("p-sidebar-button__line--open");
			jQuery(".c-wrapper").fadeOut();
			jQuery(".l-sidebar").removeClass("l-sidebar--open");
			jQuery("body").removeClass("stop");
		}
	});
	/* 読み込み時の画面サイズによって幅が変わるため今回は不使用 */
	// let w1 = jQuery("aside").outerWidth(true);
	// console.log(w1);
	// let w2 = (w1-15);
	// jQuery(".p-sidebar__button").width(w2);
	// console.log(w2);
	// let w3 = jQuery(".p-sidebar").outerWidth(true);
	// console.log(w3);
	// let w4 = jQuery("body").outerWidth(true);
	// console.log(w4);
	// let w5 = jQuery("aside").outerWidth(true);
	// console.log(w5);
})