<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$count = 1;?>
<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<?if ($count >= 4):?>
		<?$count = 1;?>
	<?endif;?>

	<?if ($count === 1):?>
		<div class="col-12" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<a class="success-tmb" href="/education_and_development/success/#story=story<?=$arItem["ID"]?>">
				<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 749, "height" => 300), BX_RESIZE_IMAGE_EXACT);?>
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
	<?endif;?>
	
	<?if ($count >= 2):?>
		<div class="col-12 col-md-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<a class="success-tmb" href="/education_and_development/success/#story=story<?=$arItem["ID"]?>">
				<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 364, "height" => 300), BX_RESIZE_IMAGE_EXACT);?>
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
	<?endif;?>

	<?$count++;?>
<?endforeach;?>