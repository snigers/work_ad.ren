<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

<div class="row" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
	<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["LEFT_IMG"]["VALUE"], Array("width" => 800, "height" => 420), BX_RESIZE_IMAGE_EXACT);?>
	<div class="col-6">
		<div class="page-header-bg" style="background-image: url(<?=$img["src"]?>)"></div>
	</div>
	<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["RIGHT_IMG"]["VALUE"], Array("width" => 800, "height" => 420), BX_RESIZE_IMAGE_EXACT);?>
	<div class="col-6">
		<div class="page-header-bg" style="background-image: url(<?=$img["src"]?>)"></div>
	</div>
</div>