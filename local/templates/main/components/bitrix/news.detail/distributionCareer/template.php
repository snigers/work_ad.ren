<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

<div class="career-item" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
	<div class="career-item-pic"><img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"></div>
	<div class="career-item-descr">
		<div class="h2"><?=$arResult["NAME"]?></div>
		<?=$arResult["PREVIEW_TEXT"]?>
		<div class="career-item-button"><a class="btn btn-1" href="<?=$arResult["PROPERTIES"]["LINK_BTN"]["VALUE"]?>"><?=$arResult["PROPERTIES"]["TITLE_BTN"]["VALUE"]?></a></div>
	</div>
</div>
