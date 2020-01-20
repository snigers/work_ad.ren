<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DETAIL_PAGE_URL", "PROPERTY_IMG_HEADER_DETAIL", "PROPERTY_POSITION");
$arFilter = Array("IBLOCK_ID"=>$arResult["IBLOCK_ID"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array("SORT" => "ASC", "ID" => "ASC"), $arFilter, false, Array("nPageSize"=>50), $arSelect);
$result = "";
$flag = false;
$first_elem = "";
$first_elem_flag = false;
while($ob = $res->GetNextElement()) {
	$arFields = $ob->GetFields();
	
	if (!$first_elem_flag)
	{
		$first_elem_flag = true;
		$first_elem = $arFields;
	}
	
	if ($flag)
	{
		$arResult["NEXT_ITEM"] = $arFields;
		break;
	}
	if ($arFields["ID"] == $arResult["ID"])
	{
		$flag = true;
	}
}

if (!$arResult["NEXT_ITEM"])
{
	$arResult["NEXT_ITEM"] = $first_elem;
}