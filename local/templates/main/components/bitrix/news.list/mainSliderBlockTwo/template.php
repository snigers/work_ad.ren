<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="reasons-slider-tabs">
	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<div class="reasons-slider-tabs-item">
			<div class="num"><?=$key + 1?></div>
			<div class="ttl"><?=$arItem["NAME"]?></div>
		</div>
	<?endforeach;?>
</div>
<?
//pr($arResult["ITEMS"]);
?>
<div class="reasons-slider-wrapper">
	<div class="reasons-slider">
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
				<div class="slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<div class="reasons-item">
						<div class="row">
							<div class="col-12 col-md-7">
								<div class="reasons-item-pic">
									<?$img = CFile::ResizeImageGet($arItem["PROPERTIES"]["IMG_BACK"]["VALUE"], Array("width" => 455, "height" => 500), BX_RESIZE_IMAGE_EXACT);?>
									<div class="reasons-item-pic-back"><img src="<?=$img["src"]?>"></div>
									<?$img = CFile::ResizeImageGet($arItem["PROPERTIES"]["IMG_FRONT"]["VALUE"], Array("width" => 338, "height" => 400), BX_RESIZE_IMAGE_EXACT);?>
									<div class="reasons-item-pic-front"><img src="<?=$img["src"]?>"></div>
								</div>
							</div>
							<div class="col-12 col-md-5">
								<div class="reasons-item-descr">
									<div class="h3"><?=$arItem["PROPERTIES"]["TITLE_TO_SLIDE"]["~VALUE"]["TEXT"]?></div>
									<?=$arItem["PREVIEW_TEXT"]?>
								</div>
							</div>
						</div>
					</div>
				</div>
		<?endforeach;?>
	</div>
	
	<div class="reasons-slider-nav">
		<div class="reasons-slider-arrows">
			<div class="reasons-slider-prev">
				<div class="arrow-tip"><img class="svg-inline" src="/layout/images/arrow-tip-prev.svg"></div>
			</div>
			<div class="reasons-slider-next">
				<div class="arrow-tip"><img class="svg-inline" src="/layout/images/arrow-tip-next.svg"></div>
			</div>
		</div>
		<div class="reasons-slider-nav-count"><span class="cur"></span>/<span class="total"></span></div>
	</div>
</div>