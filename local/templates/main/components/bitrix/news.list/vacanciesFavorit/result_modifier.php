<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arCity = getListCity();

foreach ($arResult["ITEMS"] as $key => $arItem)
{
	foreach ($arCity as $arElem)
	{
		if ($arItem["PROPERTIES"]["CITY"]["VALUE"] == $arElem["UF_XML_ID"])
		{
			$arResult["ITEMS"][$key]["PROPERTIES"]["CITY"]["VALUE"] = $arElem["UF_NAME"];
		}
	}
}

