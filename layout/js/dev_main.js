$(document).ready(function () {

	getPerPage();
	getSortNum();
	getFilterPage();

	$("body").on('click', '.show-num-buttons-item button', function (e) {
		e.preventDefault();

		var value = $(this).text();

		displayNumElem(value);
		setFilterAjax();

	});

	$(".dropdown-menu").on("click", "li", function(){
		setFilterAjax();
	});

	$("input:radio").on("change", function(){
		setFilterAjax();
	});



});

function setFilterAjax() {
	var url = '/ajax/ajax_vacancies_list.php';
	var sort_num = "";
	var per_page = "";


	//Получаем значение сортировки
	$(".form-item-sort select").find("option").each(function() {
		if ($(".form-item-sort button").attr("title") == $(this).text()) {
			sort_num = $(this).val();
		}
	});

	//Получаем значение количества элементов на странице
	$(".show-num").find(".show-num-buttons-item button").each(function(){
		if ($(this).hasClass("active"))
		{
			per_page = $(this).text();
		}
	});

	// Получение фильтров
	var set_filter = "&set_filter=Y";
	$("body").find("input:radio").each(function(){

		if ($(this).is(':checked'))
		{
			var name = $(this).attr("name");
			if (name.indexOf("DIRECTION") >= 0)
			{
				set_filter += "&arrFilter_pf[DIRECTION]=" + $(this).val();
			}

			if (name.indexOf("TYPE_EMPLOYMENT") >= 0)
			{
				set_filter += "&arrFilter_pf[TYPE_EMPLOYMENT]=" + $(this).val();
			}

			if (name.indexOf("BRAND") >= 0)
			{
				set_filter += "&arrFilter_pf[BRAND]=" + $(this).val();
			}
		}
	});


	$.ajax({
		url: url,
		dataType: 'html',
		type: 'POST',
		data: "sort_num=" + sort_num + "&per_page=" + per_page + set_filter,
		success: function (html) {

			$('.vac-list').remove();
			$('.list-controls-bottom').remove();
			$('.vac-l').append($(html).find(".vac-list"));
			$('.vac-l').append($(html).find(".list-controls-bottom"));

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

function getPerPage() {
	var per_page = $(".vac-l").data("perpage");
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