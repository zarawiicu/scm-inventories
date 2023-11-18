$.ajaxSetup({
	cache: false,
});

$(function () {
	sidenav_active();
});

const pathname = window.location.pathname;

if (pathname.substring(pathname.length - 1) != "/") {
	location.href = location.href + "/";
}

if (window.location.hash !== "") {
	loading(window.location.hash.substring(2), window.location.hash);
} else {
	loading("dashboard");
}

window.addEventListener("hashchange", function (ev) {
	const href = findHash(ev.newURL);
	if (href.valid) loading(href.url, "none");
});

function findHash(url) {
	let valid = false;
	for (var i = 0; i < url.length; i++) {
		if (url.substring(i, i + 1) == "#") {
			var newUrl = url.substring(i);
			if (newUrl.substring(0, 1) == "#" && newUrl.substring(0, 2) == "#/") {
				newUrl = newUrl.substring(2);
				valid = true;
				break;
			} else if (newUrl.substring(0, 1) == "#") {
				newUrl = newUrl.substring(1);
				break;
			}
		}
	}
	return {
		url: newUrl,
		valid: valid,
	};
}

function loading(url, after = "") {
	$("#content").setLoading();
	$.ajax({
		url: base_url + url,
		type: "GET",
		mimeType: "text/html charset=utf-8",
		async: true,
		cache: false,
		success: function (data) {
			$("#content").html(data);
			if (after != "none") window.location.hash = after;
		},
		error: function (xhr, status, error) {
			reskara_error_handler(xhr, base_url);
		},
	});
}

function sidenav_active() {
	$(".menu-item").on("click", function () {
		$(".menu-item").removeClass("active");
		$(this).addClass("active");
	});

	$(".menu-link").each(function () {
		if (window.location.hash == $(this).attr("href")) {
			$(this).parent().addClass("active");
		}
	});

	if (window.location.hash == "") {
		$("#dashboard").addClass("active");
	}
}
