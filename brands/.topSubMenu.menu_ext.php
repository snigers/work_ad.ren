<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


global $APPLICATION;

if(CModule::IncludeModule("iblock"))
{
	
	$IBLOCK_ID = 30;
	
	$arOrder = Array("SORT"=>"ASC");
	$arSelect = Array("ID", "NAME", "IBLOCK_ID", "DETAIL_PAGE_URL", "PREVIEW_PICTURE");
	$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y");
	$res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);
	
	while($ob = $res->GetNextElement())
	{
		$arFields = $ob->GetFields();
		$aMenuLinksExt[] = Array(
			$arFields['NAME'],
			$arFields['DETAIL_PAGE_URL'],
			Array(),
			Array(
				"IMAGE" => CFile::GetPath($arFields["PREVIEW_PICTURE"]),
			),
			""
		);
		
	}
	
}

$aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);