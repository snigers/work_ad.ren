<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$count = 1;?>
<?$flag = false?>
<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<!--	--><?//$_REQUEST["NEXT_DETAIL"] =($key + 2 <= count($arResult["ITEMS"])) ? "story" . ($key + 2) : "story" . 1?>
	<?if (($count == 4 && !$flag) || ($count == 6 && $flag)):?>
		<?if ($flag):?>
			<?$count = 1;?>
			<?$flag = false;?>
		<?else:?>
			<?$flag = true;?>
			<?$count = 1;?>
		<?endif;?>
		<div class="col-12 col-md-8" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<a class="success-tmb" href="#" data-popup="#storyPopup" data-popup-content="<?=$arItem["DETAIL_PAGE_URL"] . '?detail=Y'?>" data-hash="story<?=$key + 1?>" data-popup-next="<?=($key + 2 <= count($arResult["ITEMS"])) ? "story" . ($key + 2) : "story" . 1?>">
				<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 710, "height" => 290), BX_RESIZE_IMAGE_EXACT);?>
				<div class="success-tmb-pic"><img src="<?=$img["src"]?>"></div>
				<div class="success-tmb-descr">
					<div class="h3"><?=$arItem["PROPERTIES"]["QUOTE"]["~VALUE"]["TEXT"]?></div>
					<div class="success-tmb-author">
						<div class="success-tmb-name">
							<p><?=$arItem["NAME"]?></p>
						</div>
						<div class="success-tmb-post">
							<p><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?>, <?=$arItem["PROPERTIES"]["CITY"]["VALUE"]?></p>
						</div>
					</div>
				</div>
			</a>
		</div>
	<?else:?>
		<div class="col-12 col-md-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<a class="success-tmb" href="#" data-popup="#storyPopup" data-popup-content="<?=$arItem["DETAIL_PAGE_URL"] . '?detail=Y'?>" data-hash="story<?=$key + 1?>" data-popup-next="<?=($key + 2 <= count($arResult["ITEMS"])) ? "story" . ($key + 2) : "story" . 1?>">
				<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 346, "height" => 290), BX_RESIZE_IMAGE_EXACT);?>
				<div class="success-tmb-pic"><img src="<?=$img["src"]?>"></div>
				<div class="success-tmb-descr">
					<div class="h3"><?=$arItem["PROPERTIES"]["QUOTE"]["~VALUE"]["TEXT"]?></div>
					<div class="success-tmb-author">
						<div class="success-tmb-name">
							<p><?=$arItem["NAME"]?></p>
						</div>
						<div class="success-tmb-post">
							<p><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?>, <?=$arItem["PROPERTIES"]["CITY"]["VALUE"]?></p>
						</div>
					</div>
				</div>
			</a>
		</div>
		<?$count++?>
	<?endif;?>
<?endforeach;?>
