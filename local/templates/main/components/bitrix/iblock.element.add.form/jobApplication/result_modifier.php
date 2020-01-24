<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;

$dir = $APPLICATION->GetCurDir();
$arResult["PROPERTY_LIST_FULL"][175]["ENUM"] = getListCity();

$arResult["PROPERTY_LIST_FULL"][187]["ENUM"] = getListLang();
$arResult["PROPERTY_LIST_FULL"][188]["ENUM"] = getListLang();


$IBLOCK_ID = 27;

$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_DIRECTION");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>500), $arSelect);
while($ob = $res->GetNextElement()){
	$arFields = $ob->GetFields();
	$arResult["PROPERTY_LIST_FULL"][174]["ENUM"][] = $arFields;
}

$arResult["PROPERTY_LIST_FULL"][174]["DIR"] = $dir;
$result = array();
foreach ($arResult["PROPERTY_LIST_FULL"][174]["ENUM"] as $arItem)
{
	if ($dir == "/profile_retail/" && $arItem["PROPERTY_DIRECTION_VALUE"] == "Фирменный магазин")
	{
		$result[] = $arItem;
	}
	if ($dir == "/profile_office/" && $arItem["PROPERTY_DIRECTION_VALUE"] == "Офис")
	{
		$result[] = $arItem;
	}
	if ($dir == "/profile_distribution/" && $arItem["PROPERTY_DIRECTION_VALUE"] == "Центр дистрибуции")
	{
		$result[] = $arItem;
	}
}

$arResult["PROPERTY_LIST_FULL"][174]["ENUM"] = $result;