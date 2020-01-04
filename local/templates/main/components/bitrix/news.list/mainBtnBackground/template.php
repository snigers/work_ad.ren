<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
	<?if ($arItem["PROPERTIES"]["TITLE_BTN"]["VALUE"] && $arItem["PROPERTIES"]["LINK_BTN"]["VALUE"]):?>
		<div class="col-12 col-md-4" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<div class="h3"><?=$arItem["NAME"]?></div>
			<a class="btn btn-1" href="<?=$arItem["PROPERTIES"]["LINK_BTN"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["TITLE_BTN"]["VALUE"]?></a>
		</div>
	<?endif;?>
<?endforeach;?>