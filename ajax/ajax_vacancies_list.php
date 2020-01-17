<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Highloadblock\HighloadBlockTable as HLBT;?>

<?
$sort = getSortVacancies($_REQUEST["sort_num"]);


if($_REQUEST["set_filter"] == "Y")
{
	$APPLICATION->IncludeComponent(
		"bitrix:catalog.filter",
		"filter_ajax",
		Array(
			"IBLOCK_TYPE" => "job_openings",
			"IBLOCK_ID" => "27",
			"FILTER_NAME" => "",
			"FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"PROPERTY_CODE" => array(
				0 => "BRAND",
				1 => "CITY",
				2 => "PUBLICATION_DATA",
				3 => "DIRECTION",
				4 => "TYPE_EMPLOYMENT",
				5 => "",
			),
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_GROUPS" => "N",
			"PAGER_PARAMS_NAME" => "",
		),
		false
	);
}

if ($_REQUEST["sort_city"] != "Все города")
{
	$arCity = getListCity();
	foreach ($arCity as $arItem)
	{
		if ($arItem["UF_NAME"] == $_REQUEST["sort_city"])
		{
			$arHItem = $arItem["UF_XML_ID"];
		}
		
	}
	$GLOBALS['arrFilter'] = array("PROPERTY_CITY" => $arHItem);
}
if ($_REQUEST["search"] != "")
{
	$GLOBALS['arrFilter']["NAME"] = "%" . $_REQUEST["search"] . "%";
}

if ($_REQUEST["DIRECTION"] != "Все направления")
{
	$GLOBALS['arrFilter']["PROPERTY_DIRECTION_VALUE"] = $_REQUEST["DIRECTION"];
}
if ($_REQUEST["TYPE_EMPLOYMENT"] != "Все типы занятости")
{
	$GLOBALS['arrFilter']["PROPERTY_TYPE_EMPLOYMENT_VALUE"] = $_REQUEST["TYPE_EMPLOYMENT"];
}
if ($_REQUEST["BRAND"] != "Все бренды")
{
	$GLOBALS['arrFilter']["PROPERTY_BRAND_VALUE"] = $_REQUEST["BRAND"];
}


$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"vacanciesList",
	Array(
		"IBLOCK_TYPE" => 'job_openings',
		"IBLOCK_ID" => 27,
		"NEWS_COUNT" => ($_REQUEST["per_page"])?$_REQUEST["per_page"]:12,
		"SORT_BY1" => $sort["sort_by"],
		"SORT_ORDER1" => $sort["sort_order"],
		"SORT_BY2" => 'SORT',
		"SORT_ORDER2" => 'ASC',
		"FIELD_CODE" => array(),
		"PROPERTY_CODE" => array(
			"0" => "BRAND",
			"1" => "CITY",
			"2" => "DIRECTION",
			"3" => "TYPE_EMPLOYMENT",
			"4" => "PUBLICATION_DATA"
		),
		"DETAIL_URL" => "/vacancies/#ELEMENT_CODE#/",
		"SECTION_URL" => '/vacancies/',
		"IBLOCK_URL" => '/vacancies/',
		"DISPLAY_PANEL" => "",
		"SET_TITLE" => "",
		"SET_LAST_MODIFIED" => "",
		"MESSAGE_404" => "",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"FILE_404" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => 36000000,
		"CACHE_FILTER" => "",
		"CACHE_GROUPS" => "",
		"DISPLAY_TOP_PAGER" => "",
		"DISPLAY_BOTTOM_PAGER" => "1",
		"PAGER_TITLE" => "Новости",
		"PAGER_TEMPLATE" => "vacancies",
		"PAGER_SHOW_ALWAYS" => "",
		"PAGER_DESC_NUMBERING" => "",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => 36000,
		"PAGER_SHOW_ALL" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "0",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"USE_PERMISSIONS" => "",
		"GROUP_PERMISSIONS" => array(
			"0" => 1
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "",
		"CHECK_DATES" => 1,
	),
	false
);?>









<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); ?>