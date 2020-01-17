<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arResult["MENU"] = array();
$property_enums = CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>35, "CODE"=>"TYPE_OFFICE"));
$key = 0;
while($enum_fields = $property_enums->GetNext())
{
	$arResult["MENU"][$key]["VALUE"] = $enum_fields["VALUE"];
	$arResult["MENU"][$key]["SORT"] = $enum_fields["SORT"];
	$key++;
}