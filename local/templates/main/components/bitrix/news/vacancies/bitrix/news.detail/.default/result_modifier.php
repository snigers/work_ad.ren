<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$listCity = getListCity();
foreach($listCity as $arCity)
{
	if ($arCity["UF_XML_ID"] == $arResult["PROPERTIES"]["CITY"]["VALUE"])
	{
		$arResult["PROPERTIES"]["CITY"]["VALUE_XML"] = $arResult["PROPERTIES"]["CITY"]["VALUE"];
		$arResult["PROPERTIES"]["CITY"]["VALUE"] = $arCity["UF_NAME"];
	}
}


foreach ($arResult["PROPERTIES"]["ITEMS_WHY_ADIDAS"]["VALUE"] as $key => $arItems)
{
	$res = CIBlockElement::GetByID($arItems);
	if($ar_res = $res->GetNext())
	$arResult["PROPERTIES"]["ITEMS_WHY_ADIDAS"]["VALUE"][$key] = $ar_res;
}

foreach ($arResult["PROPERTIES"]["SIMILAR_VACANCIES"]["VALUE"] as $key => $arItems)
{
	
	$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DETAIL_PAGE_URL", "PROPERTY_CITY", "PROPERTY_DIRECTION", "PROPERTY_LOGO_PREVIEW");
	$arFilter = Array("IBLOCK_ID"=>$arResult["PROPERTIES"]["SIMILAR_VACANCIES"]["IBLOCK_ID"], "ID" => $arItems, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
	while($ob = $res->GetNextElement()){
		$arRes = $ob->GetFields();
		
		foreach($listCity as $arCity)
		{
			if ($arCity["UF_XML_ID"] == $arRes["PROPERTY_CITY_VALUE"])
			{
				$arRes["PROPERTY_CITY_VALUE"] = $arCity["UF_NAME"];
			}
		}
		
		$arResult["PROPERTIES"]["SIMILAR_VACANCIES"]["VALUE"][$key] = $arRes;
	}
}

foreach ($arResult["PROPERTIES"]["ITEM_STORIES"]["VALUE"] as $key => $arItem)
{
	
	$arSelect1 = Array("ID", "IBLOCK_ID", "PREVIEW_PICTURE", "NAME", "DETAIL_PAGE_URL", "PROPERTY_QUOTE", "PROPERTY_POSITION", "PROPERTY_CITY");
	$arFilter1 = Array("IBLOCK_ID"=> $arResult["PROPERTIES"]["ITEM_STORIES"]["LINK_IBLOCK_ID"], "ID" => $arItem, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
	$res1 = CIBlockElement::GetList(Array(), $arFilter1, false, Array("nPageSize"=>50), $arSelect1);
	while($ob1 = $res1->GetNextElement()){
		$arRes1 = $ob1->GetFields();
		
		$arResult["PROPERTIES"]["ITEM_STORIES"]["VALUE"][$key] = $arRes1;
	}
}

foreach ($arResult["PROPERTIES"]["ITEMS_FAQ"]["VALUE"] as $key => $arItem)
{
	
	$arSelect1 = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_TEXT");
	$arFilter1 = Array("IBLOCK_ID"=> $arResult["PROPERTIES"]["ITEMS_FAQ"]["LINK_IBLOCK_ID"], "ID" => $arItem, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
	$res1 = CIBlockElement::GetList(Array(), $arFilter1, false, Array("nPageSize"=>50), $arSelect1);
	while($ob1 = $res1->GetNextElement()){
		$arRes1 = $ob1->GetFields();
		
		$arResult["PROPERTIES"]["ITEMS_FAQ"]["VALUE"][$key] = $arRes1;
	}
}

if ($arResult["PROPERTIES"]["DIRECTION"]["VALUE_ENUM_ID"] == 1)
{
	$arResult["LINK_RESPOND"] = "/profile_retail/?name=" . $arResult["NAME"];
}
if ($arResult["PROPERTIES"]["DIRECTION"]["VALUE_ENUM_ID"] == 2)
{
	$arResult["LINK_RESPOND"] = "/profile_office/?name=" . $arResult["NAME"];
}
if ($arResult["PROPERTIES"]["DIRECTION"]["VALUE_ENUM_ID"] == 3)
{
	$arResult["LINK_RESPOND"] = "/profile_distribution/?name=" . $arResult["NAME"];
}