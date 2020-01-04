<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-12 col-md-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
		<a class="cat-tmb" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>">
			<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 558, "height" => 440), BX_RESIZE_IMAGE_EXACT);?>
			<div class="cat-tmb-pic" style="background-image: url(<?=$img["src"]?>);"></div>
			<div class="cat-tmb-descr">
				<div class="h3"><?=$arItem["NAME"]?></div>
				<?=$arItem["~PREVIEW_TEXT"]?>
				
				<div class="cat-tmb-button">
					<div class="btn btn-4"><?=$arItem["PROPERTIES"]["TITLE_BTN"]["VALUE"]?></div>
				</div>
			</div>
		</a>
	</div>
<?endforeach;?>