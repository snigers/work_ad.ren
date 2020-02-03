<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>


<div id="<?= $this->GetEditAreaId($arResult['ID']); ?>"><?=$arResult["PROPERTIES"]["SUBTITLE"]["VALUE"]?></div>
<div class="article-button-wrapper">
    <p><a class="btn btn-1" href="<?=($arResult["PROPERTIES"]["LINK_BTN"]["VALUE"]) ? $arResult["PROPERTIES"]["LINK_BTN"]["VALUE"] : "/profile_retail/"?>">
            <span><?=($arResult["PROPERTIES"]["TITLE_BTN"]["VALUE"]) ? $arResult["PROPERTIES"]["TITLE_BTN"]["VALUE"] : "Заполнить анкету"?></span></a></p>
</div>