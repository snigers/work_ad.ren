<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<?if ($key === 0):?>
		<div class="col-12 col-md-8">
			<div class="news-tmb news-tmb-big" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 746, "height" => 570), BX_RESIZE_IMAGE_EXACT);?>
				<a class="news-tmb-pic" href="#"><img src="<?=$img["src"]?>"></a>
				<div class="news-tmb-descr">
					<ul class="news-tmb-tags">
						<?$arStr = explode(', ', $arItem["TAGS"])?>
						<?foreach($arStr as $str):?>
							<li><a href="#"><?=$str?></a></li>
						<?endforeach;?>
					</ul>
					<a href="#">
						<div class="h3"><?=$arItem["NAME"]?></div>
						<div class="div news-tmb-date"><?=$arItem["PROPERTIES"]["PUBLICATION_DATE"]["VALUE"]?></div>
					</a>
				</div>
			</div>
		</div>
	<?endif;?>

	<?if ($key === 1):?>
		<div class="col-12 col-md-4">
			<div class="news-tmb" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 366, "height" => 210), BX_RESIZE_IMAGE_EXACT);?>
				<a class="news-tmb-pic" href="#"><img src="<?=$img["src"]?>"></a>
				<div class="news-tmb-descr">
					<ul class="news-tmb-tags">
						<?$arStr = explode(', ', $arItem["TAGS"])?>
						<?foreach($arStr as $str):?>
							<li><a href="#"><?=$str?></a></li>
						<?endforeach;?>
					</ul><a href="#">
						<div class="h3"><?=$arItem["NAME"]?></div>
						<div class="div news-tmb-date"><?=$arItem["PROPERTIES"]["PUBLICATION_DATE"]["VALUE"]?></div></a>
				</div>
			</div>
	<?endif;?>
	
	<?if ($key === 2):?>
			<div class="news-tmb" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 366, "height" => 210), BX_RESIZE_IMAGE_EXACT);?>
				<a class="news-tmb-pic" href="#"><img src="<?=$img["src"]?>"></a>
				<div class="news-tmb-descr">
					<ul class="news-tmb-tags">
						<?$arStr = explode(', ', $arItem["TAGS"])?>
						<?foreach($arStr as $str):?>
							<li><a href="#"><?=$str?></a></li>
						<?endforeach;?>
					</ul><a href="#">
						<div class="h3"><?=$arItem["NAME"]?></div>
						<div class="div news-tmb-date"><?=$arItem["PROPERTIES"]["PUBLICATION_DATE"]["VALUE"]?></div></a>
				</div>
			</div>
		</div>
	<?endif;?>
<?endforeach;?>