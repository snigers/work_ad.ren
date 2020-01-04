<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Highloadblock\HighloadBlockTable as HLBT;


CModule::IncludeModule('highloadblock');

$highblock_id = 2;
$hl_block = HLBT::getById($highblock_id)->fetch();

// Получение имени класса
$entity = HLBT::compileEntity($hl_block);
$entity_data_class = $entity->getDataClass();

// Вывод элементов Highload-блока
$rs_data = $entity_data_class::getList(array(
	'select' => array('*')
));
while ($el = $rs_data->fetch()){
	$arHItem[] = $el;
}

foreach ($arResult["ITEMS"] as $key => $arItem)
{
	foreach ($arHItem as $arElem)
	{
		if ($arItem["PROPERTIES"]["CITY"]["VALUE"] == $arElem["UF_XML_ID"])
		{
			$arResult["ITEMS"][$key]["PROPERTIES"]["CITY"]["VALUE"] = $arElem["UF_NAME"];
		}
	}
}