<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>


<ul class="page-menu" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
	<li><a href="#description"><?=$arResult["PROPERTIES"]["FIRST_POINT"]["VALUE"]?></a></li>
	<li><a href="#info"><?=$arResult["PROPERTIES"]["TWO_POINT"]["VALUE"]?></a></li>
	<li><a href="#contacts"><?=$arResult["PROPERTIES"]["THREE_POINT"]["VALUE"]?></a></li>
	<li><a href="#languages"><?=$arResult["PROPERTIES"]["FOUR_POINT"]["VALUE"]?></a></li>
	<li><a href="#extra"><?=$arResult["PROPERTIES"]["FIVE_POINT"]["VALUE"]?></a></li>
	<li><a href="#cv"><?=$arResult["PROPERTIES"]["SIX_POINT"]["VALUE"]?></a></li>
</ul>
