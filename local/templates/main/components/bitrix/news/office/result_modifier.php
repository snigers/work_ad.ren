<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arResult["ELEMENTS_OFFICE"] = array();
$department = array();
$vacancies = array();

// Вытаскиваем разделы
$arSelect = Array("ID");
$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement()){
	$arFields = $ob->GetFields();
	$department[] = $arFields["ID"];
}

// Вытаскиваем все вакансии, фильтруем по "Офис"
$arSelect = Array("ID", "IBLOCK_ID");
$arFilter = Array("IBLOCK_ID"=>27, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_DIRECTION_VALUE" => "Офис");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
while($ob = $res->GetNextElement()){
	$arFields = $ob->GetFields();
	$arProp = $ob->GetProperties(array(), array("CODE" => "DEPARTMENT_OFFICE"));
	$arFields["DEPARTMENT_OFFICE"] = $arProp["DEPARTMENT_OFFICE"];
	$vacancies[] = $arFields;
}

$resultDepartment = array();
$resultDepartmentID = array();

foreach($department as $keyDep => $arDepartment)
{
	foreach ($vacancies as $keyVac => $arVacancies)
	{
		foreach ($arVacancies["DEPARTMENT_OFFICE"]["VALUE"] as $arItem)
		{
			if ($arDepartment == $arItem)
			{
				$resultDepartmentID[] = $arDepartment;
				$resultDepartment[$arDepartment]["VACANCIES"][] = $arVacancies["ID"];
			}
		}
	}
}
$resultDepartmentID = array_unique($resultDepartmentID, SORT_REGULAR );
$arResult["ELEMENTS_ID"] = $resultDepartmentID;
$arResult["ELEMENTS_OFFICE"] = $resultDepartment;
