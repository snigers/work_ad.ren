$(document).ready(function () {


	if (document.location.pathname == "/contacts/")
	{
		ymaps.ready(function () {
			$("body").find(".office-map").each(function (key) {
				var pointer = $(this).data("geo").split(",");

				var myMap1 = new ymaps.Map($(this).attr("id"), {
						center: [pointer[0], pointer[1]],
						zoom: 16,
						controls: ['zoomControl']
					}, {}),

					myPlacemark = new ymaps.Placemark([pointer[0], pointer[1]], {
						hintContent: '',
						balloonContent: ''
					}, {
						// Опции.
						// Необходимо указать данный тип макета.
						iconLayout: 'default#image',
						// Своё изображение иконки метки.
						iconImageHref: '/layout/images/store-pin.png',
						// Размеры метки.
						iconImageSize: [27, 38],
						// Смещение левого верхнего угла иконки относительно
						// её "ножки" (точки привязки).
						iconImageOffset: [-13, -38]
					});

				myMap1.behaviors.disable('scrollZoom');

				myMap1.geoObjects
					.add(myPlacemark);

			});
		});
	}



	var page = "";

	if (document.location.pathname == "/vacancies/")
	{
		page = "vacancies";
		getPerPageVac();
		getSortNum();
		getFilterPage();
		setCheckboxFilterVac();
	}
	if (document.location.pathname == "/about/news/")
	{
		page = "news";
		getPerPageNews();
		setTag();
	}

	$("body").on("click", ".next-story-link", function(e){
		var id = $(this).data("next-id");
		var url_ajax = "/ajax/ajax_success_detail.php";
		var url = document.location.href;
		var base_url = url.slice(0, url.indexOf("#"));
		var elem = "";

		e.preventDefault();

		console.log(hash);
		console.log(url.slice(url.indexOf("=story") + 6));

		$.ajax({
			url: url_ajax,
			dataType: 'html',
			type: 'POST',
			data: "id=" + id,
			success: function (html) {

				console.log(html);

				$(".popup-header").remove();
				$(".popup-body").remove();
				$(".popup-footer").remove();
				$(".popup-inner").append($(html));
				// $(".popup-inner").append($(html).filter(".popup-body"));
				// $(".popup-inner").append($(html).filter(".popup-footer"));
				// $(".vac-l").append($(html).filter(".list-controls-bottom"));


			}
		});


		// $("body").find(".success-tmb-name").each(function(){
		// 	if ($(this).find("p").text() == $(".popup-header-title-l").find(".h2").text())
		// 	{
		// 		console.log($(this).parent().parent().parent().data("popup-next"));
		// 		$("#storyPopup").find(".next-story-link").attr("data-popup-content", "/education_and_development/success/mariya-spiridonova8909/?detail=Y");
		// 		$("#storyPopup").find(".next-story-link").attr("data-hash", $(this).parent().parent().parent().data("popup-next"));
		//
		// 		console.log($("#storyPopup").find(".next-story-link"));
		// 	}
		// });
	});



	$("body").on('click', '.show-num-buttons-item button', function (e) {
		e.preventDefault();
		var value = $(this).text();

		displayNumElem(value);
		setFilterAjax(page);
	});

	$(".dropdown-menu").on("click", "li", function(){
		setFilterAjax(page, $(this));
	});

	$("#vac_search_form, #news_search_form").on("click", "button", function(e){
		e.preventDefault();
		setFilterAjax(page);
	});

	$("input:radio").on("change", function(){
		setFilterAjax(page);
	});

	$(".wide-page-wrapper").on("click", ".news-tmb-tags a", function(e){
		e.preventDefault();
		setFilterAjax(page, $(this));
	});



});

function setFilterAjax(page, element = "") {
	var url = "";
	var sort_num = "";
	var per_page = "";
	var sort_city = "";
	var result = "";

	if (page == "vacancies")
	{
		url = '/ajax/ajax_vacancies_list.php';
		// Получаем значение из поиска по городу
		var search = $("#vac_search_form input").val();

		//Получаем значение сортировки
		$(".form-item-sort select").find("option").each(function () {
			if ($(".form-item-sort button").attr("title") == $(this).text()) {
				sort_num = $(this).val();
			}
		});

		//Получаем значение города
		$("button").each(function () {
			if ($(this).data("id") == $("#vac_city").attr("id")) {
				sort_city = $(this).attr("title");
			}
		});

		//Получаем значение количества элементов на странице
		$(".show-num").find(".show-num-buttons-item button").each(function () {
			if ($(this).hasClass("active")) {
				per_page = $(this).text();
			}
		});

		// Получение фильтров
		var set_filter = "&set_filter=Y";
		$("body").find("input:radio").each(function () {

			if ($(this).is(':checked')) {
				var label = $(this).parent().children("label").text();
				var name = $(this).attr("name");

				if (name.indexOf("DIRECTION") >= 0) {
					set_filter += "&arrFilter_pf[DIRECTION]=" + $(this).val();
					set_filter += "&DIRECTION=" + label;
				}

				if (name.indexOf("TYPE_EMPLOYMENT") >= 0) {
					set_filter += "&arrFilter_pf[TYPE_EMPLOYMENT]=" + $(this).val();
					set_filter += "&TYPE_EMPLOYMENT=" + label;
				}

				if (name.indexOf("BRAND") >= 0) {
					set_filter += "&arrFilter_pf[BRAND]=" + $(this).val();
					set_filter += "&BRAND=" + label;
				}
			}
		});
		result = "sort_num=" + sort_num + "&per_page=" + per_page + set_filter + "&sort_city=" + sort_city + "&search=" + search;
	}

	if (page == "news")
	{
		var tag = "";

		if (element)
		{
			tag = element.text();
		}
		url = '/ajax/ajax_news_list.php';

		// Получаем значение из поиска по городу
		var search = $("#news_search_form input").val();


		// Выставляем выбранный тег в поле тегов
		if (element != "")
		{
			$(".filled").attr("title", element.text());
			$(".filled").find(".filter-option-inner-inner").text(element.text());
		}

		//Получаем значение количества элементов на странице
		$(".show-num").find(".show-num-buttons-item button").each(function () {
			if ($(this).hasClass("active")) {
				per_page = $(this).text();
			}
		});

		result = "per_page=" + per_page + "&tag=" + tag + "&search=" + search;
	}
	// console.log(page);
	// console.log(sort_city);
	// console.log(per_page);
	// console.log(set_filter);

	$.ajax({
		url: url,
		dataType: 'html',
		type: 'POST',
		data: result,
		success: function (html) {


			if (page == "vacancies")
			{
				$(".vac-list").remove();
				$(".list-controls-bottom").remove();
				$(".vac-l").append($(html).filter(".vac-list"));
				$(".vac-l").append($(html).filter(".list-controls-bottom"));
			}

			if (page == "news")
			{
				$(".news-list").remove();
				$(".list-controls-bottom-alt").remove();
				$(".wide-page-wrapper").append($(html).filter(".news-list"));
				$(".wide-page-wrapper").append($(html).filter(".list-controls-bottom-alt"));
			}
			displayNumElem(per_page);
		}
	});
}

function getFilterPage() {
	var filter_page = $("#filter_vacancies").data("filter");
	if (filter_page)
	{
		displaySetFilter(filter_page);
	}
}

function getPerPageVac() {
	var per_page = $(".vac-l").data("perpage");
	if (per_page)
	{
		displayNumElem(per_page);
	}
}

function getPerPageNews() {
	var per_page = $(".wide-page-wrapper").data("perpage");
	if (per_page)
	{
		displayNumElem(per_page);
	}
}

function getSortNum() {
	var sort_name = $(".vac-l").data("sort-num");
	if (sort_name)
	{
		setSortName(sort_name);
	}
}

function displaySetFilter(filter_page) {
	var array = filter_page.split('&');
	var result = new Array();
	array.forEach(function(value){
		result.push(value.split("="));
	});

	$("body").find("input:radio").each(function(){
		var item = $(this);

		result.forEach(function(value){
			if (item.attr("name").indexOf(value[0]) >= 0)
			{
				if (value[1] == item.val())
				{
					$(item).prop('checked', true);
				}
				if (value[1] == "NON" && item.val() == "")
				{
					$(item).prop('checked', true);
				}
			}
		});
	});
}

function setSortName(value) {
	$(".form-item-sort select").find("option").each(function() {
		if (value == $(this).val()) {
			$(".form-item-sort button").attr("title", $(this).text());
			$(".form-item-sort .filter-option-inner-inner").html($(this).text());
		}
	});
}

function displayNumElem(value) {
	$("body").find(".show-num-buttons-item").each(function() {

		var child = $(this).children("button");
		if (child.text() != value)
		{
			if (child.hasClass("active"))
				child.removeClass("active");
		} else {
			child.addClass("active");
		}
	});
}

function getSTRGET() {
	var strGET = decodeURIComponent(document.location.search.replace( '?', ''));

	if (strGET.indexOf("&") != -1)
	{
		strGET = strGET.split("&");
		strGET = strGET[0].split("=");
	} else {
		strGET = strGET.split("=");
	}

	return strGET;
}

function setCheckboxFilterVac() {
	var param = getSTRGET();

	if (param[0] != "city")
	{
		$("label").each(function () {
			if (param[1] == $(this).text()) {
				$(this).parent().children("input").prop('checked', true);
			}
		});
	} else {
		$("option").each(function () {
			if (param[1] == $(this).text()) {
				$("button").each(function() {
					if ($(this).data("id") == "vac_city") {
						$(this).attr("title", param[1]);
						$(this).find(".filter-option-inner-inner").html(param[1]);
					}
				});
			}
		});
	}
}

function setTag() {
	var strGET = decodeURIComponent(document.location.search.replace( '?', ''));
	var name_tag = "";

	if (strGET != "")
	{
		strGET = strGET.split("&");
		$.each(strGET, function(key, value){
			strGET[key] = value.split("=");
			if (strGET[key][0] == "tag")
			{
				name_tag = strGET[key][1];
			}
		});

		console.log(name_tag);
		console.log($(".filled"));
		$(".filled").attr("title", name_tag);
		$(".filter-option-inner-inner").text(name_tag);
	}
}

