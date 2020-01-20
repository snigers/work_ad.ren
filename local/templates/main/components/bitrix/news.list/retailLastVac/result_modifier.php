<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arRes = array();
$arCity = getListCity();
$count = 0;

foreach ($arResult["ITEMS"] as $key => $arItem)
{
	if ($count < 6)
	{
		if ($arItem["PROPERTIES"]["DIRECTION"]["VALUE"] == "Фирменный магазин")
		{
			foreach($arCity as $city)
			{
				if ($city["UF_XML_ID"] == $arResult["ITEMS"][$key]["PROPERTIES"]["CITY"]["VALUE"])
				{
					$arResult["ITEMS"][$key]["PROPERTIES"]["CITY"]["VALUE"] = $city["UF_NAME"];
				}
			}
			$arRes[] = $arResult["ITEMS"][$key];
			$count++;
		}
	} else {
		break;
	}
	
}
$arResult["ITEMS"] = $arRes;