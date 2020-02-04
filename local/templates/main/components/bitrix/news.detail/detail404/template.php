<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

<div class="content-404" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
	<div class="ttl-404"><img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"></div>
	<div class="text-404">
		<?=$arResult["PROPERTIES"]["MESSAGE"]["~VALUE"]["TEXT"]?>
	</div>
	<div class="buttons-404">
		<div class="row">
			<div class="col"><a class="btn btn-1" href="<?=$arResult["PROPERTIES"]["BTN_ONE_LINK"]["VALUE"]?>"><?=$arResult["PROPERTIES"]["BTN_ONE_NAME"]["VALUE"]?></a></div>
			<div class="col"><a class="btn btn-5" href="<?=$arResult["PROPERTIES"]["BTN_TWO_LINK"]["VALUE"]?>"><?=$arResult["PROPERTIES"]["BTN_TWO_NAME"]["VALUE"]?></a></div>
		</div>
	</div>
</div>