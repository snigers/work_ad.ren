<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult["ITEMS"] as $key => $arItem) {
    if ($arItem["PROPERTIES"]["GEOLOCATION"]["VALUE"] != "")
	{
		$res = CIBlockElement::GetByID($arItem["PROPERTIES"]["GEOLOCATION"]["VALUE"]);
		if($ar_res = $res->GetNext())
			$arResult["ITEMS"][$key]["PROPERTIES"]["GEOLOCATION"]["VALUE"] = $ar_res["NAME"];
	}
}