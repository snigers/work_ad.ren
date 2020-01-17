<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<ul class="page-menu" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
    <li><a href="#why"><?=($arResult["PROPERTIES"]["MENU_ONE"]["VALUE"]) ? $arResult["PROPERTIES"]["MENU_ONE"]["VALUE"] : "Почему Adidas"?></a></li>
    <li><a href="#vacancies"><?=($arResult["PROPERTIES"]["MENU_TWO"]["VALUE"]) ? $arResult["PROPERTIES"]["MENU_TWO"]["VALUE"] : "Вакансии"?></a></li>
    <li><a href="#adaptation"><?=($arResult["PROPERTIES"]["MENU_THREE"]["VALUE"]) ? $arResult["PROPERTIES"]["MENU_THREE"]["VALUE"] : "Адаптация и обучение"?></a></li>
    <li><a href="#career"><?=($arResult["PROPERTIES"]["MENU_FOUR"]["VALUE"]) ? $arResult["PROPERTIES"]["MENU_FOUR"]["VALUE"] : "Карьерные возможности"?></a></li>
    <li><a href="#success"><?=($arResult["PROPERTIES"]["MENU_FIVE"]["VALUE"]) ? $arResult["PROPERTIES"]["MENU_FIVE"]["VALUE"] : "Истории успеха"?></a></li>
    <li><a href="#excursion"><?=($arResult["PROPERTIES"]["MENU_SIX"]["VALUE"]) ? $arResult["PROPERTIES"]["MENU_SIX"]["VALUE"] : "Экскурсия по центру"?></a></li>
    <li><a href="#faq"><?=($arResult["PROPERTIES"]["MENU_SEVEN"]["VALUE"]) ? $arResult["PROPERTIES"]["MENU_SEVEN"]["VALUE"] : "Вопросы и ответы"?></a></li>
</ul>