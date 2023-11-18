(function ($) {
	$.fn.setLoading = function () {
		$(this).html(
			'<div class="spinner-border text-primary" role="status"></div>'
		);
	};
	$.fn.unsetLoading = function () {
		$(this).html("");
	};
})(jQuery);
