<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arColorMetro = getListColorMetro();

$arResult['LIST_ELEMENTS'] = array();

$arSelect = Array("ID", "IBLOCK_ID", "NAME", "IBLOCK_SECTION_ID", "DETAIL_PAGE_URL", "PROPERTY_*");
$arFilter = Array("IBLOCK_ID"=>38, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement()){
	$arFields = $ob->GetFields();
	$arFields["PROPERTIES"] = $ob->GetProperties();
	$arResult['LIST_ELEMENTS'][] = $arFields;
}

$resultJSON = array();

foreach ($arResult['SECTIONS'] as $arSection)
{
	$idJSON = 1;
	$resultJSON = array();
	
	foreach ($arResult['LIST_ELEMENTS'] as $key => $arListElement)
	{
		if ($arSection["ID"] == $arListElement["IBLOCK_SECTION_ID"])
		{
			$phoneJSON = array();
			// Вытаскиваем телефон
			foreach ($arListElement["PROPERTIES"]["PHONE"]["VALUE"] as $keyPhone => $arPhone) {
				$phoneJSON[$keyPhone]["number"] = $arPhone;
				$phoneJSON[$keyPhone]["name"] = $arResult['LIST_ELEMENTS'][$key]["PROPERTIES"]["PHONE"]["DESCRIPTION"][$keyPhone];
			}
			
			$metroJSON = array();
			//	Вытаскиваем станцию метро и ее цвет
			$arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_COLOR_BRANCH_METRO");
			$arFilter = Array("ID"=>$arListElement["PROPERTIES"]["NAME_METRO"]["VALUE"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
			$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
			$arResult['LIST_ELEMENTS'][$key]["PROPERTIES"]["NAME_METRO"]["VALUE"] = [];
			
			$countMetro = 0;
			while($ob = $res->GetNextElement()){
				$arFields = $ob->GetFields();
				foreach ($arColorMetro as $arColor)
				{
					if ($arFields["PROPERTY_COLOR_BRANCH_METRO_VALUE"] == $arColor["UF_XML_ID"])
					{
						$arFields["PROPERTY_COLOR_BRANCH_METRO_VALUE"] = $arColor["UF_DESCRIPTION"];
					}
				}
				$arResult['LIST_ELEMENTS'][$key]["PROPERTIES"]["NAME_METRO"]["VALUE"][] = $arFields;
				
				$metroJSON[$countMetro]["color"] = "#" . $arFields["PROPERTY_COLOR_BRANCH_METRO_VALUE"];
				$metroJSON[$countMetro]["name"] = $arFields["NAME"];
				
				$countMetro++;
			}
			
			//	Вытаскиваем бренды
			$arSelect = Array("NAME");
			$arFilter = Array("ID"=>$arListElement["PROPERTIES"]["BRANDS"]["VALUE"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
			$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
			$arResult['LIST_ELEMENTS'][$key]["PROPERTIES"]["BRANDS"]["VALUE"] = [];
			while($ob = $res->GetNextElement()){
				$arFields = $ob->GetFields();
				$arResult['LIST_ELEMENTS'][$key]["PROPERTIES"]["BRANDS"]["VALUE"][] = $arFields["NAME"];
			}
			
			$coordinates = explode(",", $arResult['LIST_ELEMENTS'][$key]["PROPERTIES"]["POINTER_MAP"]["VALUE"]);
			
			$resultJSON[] = array(
				"geometry" => array(
					"type" => "Point",
					"coordinates" => $coordinates
				),
				"properties" => array(
					"id" => $idJSON,
					"url" => $arListElement["DETAIL_PAGE_URL"],
					"name" => $arListElement["PROPERTIES"]["NAME_LOCATION"]["VALUE"],
					"brands" => $arResult['LIST_ELEMENTS'][$key]["PROPERTIES"]["BRANDS"]["VALUE"],
					"metro" => $metroJSON,
					"address" => $arListElement["PROPERTIES"]["ADDRESS"]["VALUE"],
					"phones" => $phoneJSON
				)
			);
			$idJSON++;
		}
	}
	$arJSON[$arSection["CODE"]]["type"] = "ObjectsCollection";
	$arJSON[$arSection["CODE"]]["objects"] = $resultJSON;
}

$arResult["JSON_FILE"] = array();

// Записываем файлы для каждого из городов
foreach ($arJSON as $keyCity => $arCity) {
	$urlFile = $_SERVER['DOCUMENT_ROOT'] . "/layout/load/stores-" . $keyCity . ".json";
	
	$arResult["JSON_FILE"][] = "/layout/load/stores-" . $keyCity . ".json";;
	
	$json = json_encode($arCity);
	
	if (file_exists($urlFile))
	{
//		if ((filemtime($urlFile) + 86400) < time())
//		{
			unlink($urlFile);
			$handle = fopen($urlFile, "w+");
			fwrite($handle, json_encode($arCity));
			fclose($handle);
//		}
	} else {
		$handle = fopen($urlFile, "w+");
		fwrite($handle, $json);
		fclose($handle);
	}

}

?>