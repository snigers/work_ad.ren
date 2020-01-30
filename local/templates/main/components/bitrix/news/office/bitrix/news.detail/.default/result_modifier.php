<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE","PROPERTY_INDICATOR");
$arFilter = Array("IBLOCK_ID"=>10, "ID"=> $arResult["PROPERTIES"]["ELEMENT_WHY_ADIDAS"]["VALUE"],"ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
$arResult["PROPERTIES"]["ELEMENT_WHY_ADIDAS"]["VALUE"] = [];
while($ob = $res->GetNextElement())
{
	$arFields = $ob->GetFields();
	$arResult["PROPERTIES"]["ELEMENT_WHY_ADIDAS"]["VALUE"][] = $arFields;
}