<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<?if ($key == 0):?>
		<li><a href="#career" id="<?= $this->GetEditAreaId($arItem['ID']); ?>"><?=$arItem["~NAME"]?></a></li>
	<?endif;?>
	<?if ($key == 1):?>
		<li><a href="#ladder" id="<?= $this->GetEditAreaId($arItem['ID']); ?>"><?=$arItem["~NAME"]?></a></li>
	<?endif;?>
<?endforeach;?>
