<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<div class="all-link-wrapper" id="<?= $this->GetEditAreaId($arResult['ID']); ?>"><a class="btn btn-2" href="/vacancies/"><?=($arResult["PROPERTIES"]["TITLE_BTN"]["~VALUE"]) ? $arResult["PROPERTIES"]["TITLE_BTN"]["~VALUE"] : "Все вакансии"?></a></div>