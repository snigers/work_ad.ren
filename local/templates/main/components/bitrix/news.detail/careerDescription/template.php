<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

	<h1 id="<?= $this->GetEditAreaId($arResult['ID']); ?>"><?=$arResult["NAME"]?></h1>
</div>
<div class="page-content">
	<div class="career-descr">
		<p><?=$arResult["PREVIEW_TEXT"]?></p><a name="ladder"></a>
		<div class="h2"><?=$arResult["PROPERTIES"]["TITLE_H2"]["VALUE"]?></div>
	</div>