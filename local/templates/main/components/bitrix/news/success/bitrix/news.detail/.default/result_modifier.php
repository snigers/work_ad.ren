<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DETAIL_PAGE_URL", "PROPERTY_IMG_HEADER_DETAIL", "PROPERTY_POSITION");
$arFilter = Array("IBLOCK_ID"=>$arResult["IBLOCK_ID"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array("SORT" => "ASC", "ID" => "ASC"), $arFilter, false, Array("nPageSize"=>50), $arSelect);
$result = "";
$flag = false;
while($ob = $res->GetNextElement()){
	$arFields = $ob->GetFields();
	if ($flag)
	{
		$arResult["NEXT_ITEM"] = $arFields;
	}
	if ($arFields["ID"] == $arResult["ID"])
	{
		$flag = true;
	}
}
