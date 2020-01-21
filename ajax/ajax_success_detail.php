<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>

<!--Пока не работает, оставил на всякий случай-->


<?$ElementID = $APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"successDetail",
	Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"IBLOCK_TYPE" => "history_success",
		
		"IBLOCK_ID" => 14,
		
		"FIELD_CODE" => array(	// Поля
			0 => "PREVIEW_PICTURE",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "AGE_FIRST_WORK",
			1 => "CITY",
			2 => "POSITION",
			3 => "TITLE_WHY_LIKE_WORK",
			4 => "TITLE_GOT_INTO_COMPANY",
			5 => "TITLE_AGE_FIRST_WORK",
			6 => "TITLE_EDUCATION",
			7 => "PLACE_OF_STUDY",
			8 => "DESCRIPTION_GOT_INTO_COMPANY",
			9 => "DESC_WHY_LIKE_WORK",
			10 => "LINK_SOC_NETWORK",
			11 => "QUOTE",
			12 => "QUOTE_DETAIL",
			13 => "",
		),
		"DETAIL_URL" => "",
		"SECTION_URL" => "",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"SET_CANONICAL_URL" => "N",
		"DISPLAY_PANEL" => "",
		"SET_LAST_MODIFIED" => "N",
		"SET_TITLE" => "Y",
		"MESSAGE_404" => "",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"FILE_404" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000",
		"CACHE_GROUPS" => "N",
		"USE_PERMISSIONS" => "N",
		"GROUP_PERMISSIONS" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Страница",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_SHOW_ALL" => "N",
		"CHECK_DATES" => "Y",
		"ELEMENT_ID" => $_REQUEST["id"],
		"ELEMENT_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"IBLOCK_URL" => "",
		"USE_SHARE" => "N",
		"SHARE_HIDE" => "",
		"SHARE_TEMPLATE" => "",
		"SHARE_HANDLERS" => "",
		"SHARE_SHORTEN_URL_LOGIN" => "",
		"SHARE_SHORTEN_URL_KEY" => "",
		"ADD_ELEMENT_CHAIN" => "Y",
		'STRICT_SECTION_CHECK' => "N",
	)
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); ?>
