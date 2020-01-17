<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?

if ($APPLICATION->GetCurDir() == "/ajax/")
{
	$arResult["sUrlPath"] = "/vacancies/";
	$arResult["sUrlPathParams"] = "/vacancies/?";
}

$arStrFilter = "";
foreach($_REQUEST as $key => $arItem)
{
	if (is_array($arItem))
	{
		foreach($arItem as $keys => $arElem)
		{
			$arStrFilter .= "&" . $key . "[" . $keys . "]=" . $arElem;
		}
	} else {
	    if ($key != "PAGEN_1")
	    {
			$arStrFilter .= "&" . $key . "=" . $arItem;
		}
	}
}

?>
<?if ($arResult["NavPageNomer"] > 1):?>
	
	<span class="modern-page-title">Страницы:</span>

	<?if($arResult["bSavePage"]):?>
		<a class="modern-page-previous" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?><?=$arStrFilter?>"><?=GetMessage("nav_prev")?></a>
		
	<?else:?>
		<?if ($arResult["NavPageNomer"] > 2):?>
			<a class="modern-page-previous" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?><?=$arStrFilter?>"><?=GetMessage("nav_prev")?></a>
		<?else:?>
			<a class="modern-page-previous" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_prev")?></a>
		<?endif?>
		
	<?endif?>

<?else:?>
<span class="modern-page-previous"><?=GetMessage("nav_prev")?></span>
<?endif?>

<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

	<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
		<span class="modern-page-current"><?=$arResult["nStartPage"]?></span>
	<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryStringFull?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?><?=$arStrFilter?>"><?=$arResult["nStartPage"]?></a>
	<?else:?>
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?><?=$arStrFilter?>"><?=$arResult["nStartPage"]?></a>
	<?endif?>
	<?$arResult["nStartPage"]++?>
<?endwhile?>

<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
	<a class="modern-page-next" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?><?=$arStrFilter?>"><?=GetMessage("nav_next")?></a>
<?else:?>
	<span class="modern-page-next"><?=GetMessage("nav_next")?></span>
<?endif?>
