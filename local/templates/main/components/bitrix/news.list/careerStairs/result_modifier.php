<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult["ITEMS"] as $key => $arItem)
{
	if (is_array($arItem["PROPERTIES"]["SIMILAR_POSTS"]))
	{
		foreach ($arItem["PROPERTIES"]["SIMILAR_POSTS"]["VALUE"] as $keys => $arProp)
		{
			$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_LEVEL");
			$arFilter = Array("IBLOCK_ID" => $arResult["IBLOCK_ID"], "ID" => $arProp, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
			$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
			while($ob = $res->GetNextElement()){
				$arResult["ITEMS"][$key]["PROPERTIES"]["SIMILAR_POSTS"]["VALUE"][$keys] = $ob->GetFields();
			}
		}
	}
	
}

$arResult["SECTION_LIST"] = array();

if(CModule::IncludeModule('iblock')){
	$arSelect = Array('IBLOCK_ID', "ID", "NAME", "DESCRIPTION", "PICTURE", "UF_*");
	$arFilter = Array('IBLOCK_ID'=> 50);
	
	$res = CIBlockSection::GetList(Array('SORT'=>'ASC'), $arFilter, true, $arSelect);
	while($ob = $res->GetNext())
	{
		$arResult["SECTION_LIST"][] = $ob;
	}
}



