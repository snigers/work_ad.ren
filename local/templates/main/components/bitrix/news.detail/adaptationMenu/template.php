<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>


<ul class="page-menu" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
	<?if ($arResult["PROPERTIES"]["FIRST_MENU_ITEM"]["VALUE"]):?>
		<li><a href="#adaptation"><?=$arResult["PROPERTIES"]["FIRST_MENU_ITEM"]["VALUE"]?></a></li>
	<?endif?>
	<?if ($arResult["PROPERTIES"]["TWO_MENU_ITEM"]["VALUE"]):?>
		<li><a href="#learning"><?=$arResult["PROPERTIES"]["TWO_MENU_ITEM"]["VALUE"]?></a></li>
	<?endif?>
	<?if ($arResult["PROPERTIES"]["THREE_MENU_ITEM"]["VALUE"]):?>
		<li><a href="#maintenance"><?=$arResult["PROPERTIES"]["THREE_MENU_ITEM"]["VALUE"]?></a></li>
	<?endif?>
</ul>
