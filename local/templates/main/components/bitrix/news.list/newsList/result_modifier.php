<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$str = "";
foreach($arResult["ITEMS"] as $key => $arItem)
{
	if ($key < count($arResult["ITEMS"]))
	{
		$str .= $arItem["TAGS"] . ", ";
	} else {
		$str .= $arItem["TAGS"];
	}
	$arResult["ITEMS"][$key]["TAGS"] = array_diff(explode(", ", $arItem["TAGS"]), array(''));
}

$arrTag = explode(", ", $str);

$arResult["ALL_TAGS"] = array_unique(array_diff($arrTag, array('')), SORT_STRING );