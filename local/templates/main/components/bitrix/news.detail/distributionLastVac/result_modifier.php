<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// Инфоблок вакансиий
$IBLOCK_ID = 27;
$arResult["VAC_LIST"] = array();
$arCity = getListCity();

$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PROPERTY_DIRECTION", "PROPERTY_CITY", "PROPERTY_LOGO_PREVIEW");
$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_DIRECTION_VALUE" => "Центр дистрибуции");
$res = CIBlockElement::GetList(Array("PROPERTY_PUBLICATION_DATA" => "ASC"), $arFilter, false, Array("nPageSize"=>50), $arSelect);
$count = 0;
while($ob = $res->GetNextElement()){
	if ($count < 6)
	{
		$arFields = $ob->GetFields();
		foreach($arCity as $city)
		{
			if ($city["UF_XML_ID"] == $arFields["PROPERTY_CITY_VALUE"])
				$arFields["PROPERTY_CITY_VALUE"] = $city["UF_NAME"];
		}
		$arResult["VAC_LIST"][] = $arFields;
	} else {
		break;
	}
	
	$count++;
}