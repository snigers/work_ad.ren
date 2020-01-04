<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

<div class="block-wide" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
	<div class="blockquote-alt-wrapper">
		<div class="blockquote-alt-pics">
			<div class="row">
				<?foreach($arResult["PROPERTIES"]["IMG_TO_BLOCK"]["VALUE"] as $arItem):?>
					<?$img = CFile::ResizeImageGet($arItem, Array("width" => 650, "height" => 500), BX_RESIZE_IMAGE_EXACT);?>
					<div class="col-6"><img src="<?=$img["src"]?>"></div>
				<?endforeach;?>
			</div>
		</div>
		<blockquote class="blockquote-alt">
			<div class="blockquote-alt-content">
				<div class="blockquote-alt-text">
					<?=$arResult["PROPERTIES"]["QUOTE"]["~VALUE"]["TEXT"]?>
				</div>
				<div class="blockquote-alt-author">
					<p><strong><?=$arResult["PROPERTIES"]["AUTHOR"]["VALUE"]?>,</strong> <?=$arResult["PROPERTIES"]["POSITION_AND_CITY"]["VALUE"]?></p>
				</div>
			</div>
		</blockquote>
	</div>
</div>
<div class="h4"><?=$arResult["PROPERTIES"]["TITLE"]["VALUE"]?></div>
<?=$arResult["PROPERTIES"]["DESCRIPTION"]["~VALUE"]["TEXT"]?>
