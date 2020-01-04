<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-12 col-md-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
		<div class="why-tmb">
			<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 373, "height" => 260), BX_RESIZE_IMAGE_EXACT);?>
			<div class="why-tmb-pic" style="background-image:url(<?=$img["src"]?>);"></div>
			<div class="why-tmb-descr">
				<div class="why-tmb-num"><?=$arItem["PROPERTIES"]["INDICATOR"]["VALUE"]?></div>
				<div class="why-tmb-text">
					<p><?=$arItem["NAME"]?></p>
				</div>
			</div>
		</div>
	</div>

<?endforeach;?>