<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("TEST");
?><?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form", 
	"template1", 
	array(
		"COMPONENT_TEMPLATE" => "template1",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"ELEMENT_ASSOC_PROPERTY" => "176",
		"GROUPS" => array(
			0 => "2",
		),
		"IBLOCK_ID" => "55",
		"IBLOCK_TYPE" => "job_postings",
		"LEVEL_LAST" => "Y",
		"LIST_URL" => "",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array(
			0 => "173",
			1 => "174",
			2 => "175",
			3 => "176",
			4 => "177",
			5 => "178",
			6 => "179",
			7 => "180",
			8 => "181",
			9 => "182",
			10 => "183",
			11 => "184",
			12 => "185",
			13 => "186",
			14 => "187",
			15 => "188",
			16 => "189",
			17 => "190",
			18 => "191",
			19 => "192",
			20 => "193",
			21 => "194",
			22 => "NAME",
		),
		"PROPERTY_CODES_REQUIRED" => array(
		),
		"RESIZE_IMAGES" => "N",
		"SEF_MODE" => "N",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "",
		"USER_MESSAGE_EDIT" => "",
		"USE_CAPTCHA" => "N"
	),
	false
);?><br>
<div>
</div><?
//require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>