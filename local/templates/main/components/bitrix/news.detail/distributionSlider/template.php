<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

<div class="col-12 col-md-8 offset-md-4" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
	<a name="excursion"></a>
	<div class="h2"><?=$arResult["NAME"]?></div>
	<div class="block-wide">
		<div class="gallery-slider">
			<?foreach ($arResult["PROPERTIES"]["SLIDER"]["VALUE"] as $arItem):?>
				<?$img = CFile::ResizeImageGet($arItem, Array("width" => 1134, "height" => 640), BX_RESIZE_IMAGE_EXACT);?>
				<div class="slide"><img data-lazy="<?=$img["src"]?>"></div>
			<?endforeach;?>
		</div>
	</div>
</div>
