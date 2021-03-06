<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-12 col-md-6 col-lg-4">
		<a class="vac-tmb" href="<?=$arItem["DETAIL_PAGE_URL"]?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			<div class="vac-tmb-header">
				<div class="h3"><?=$arItem["NAME"]?></div>
				<?$favorites = array_search($arItem["ID"],$_SESSION["LIST_FAVORITES"]);?>
                <div class="vac-tmb-fav <?=($favorites) ? "favorites-true" : ""?>" data-favorites-vac="<?=$arItem["ID"]?>" data-favorites="<?=($favorites) ? "1" : "0"?>">
                    <img class="svg-inline" src="/layout/images/ico-fav.svg">
                </div>
			</div>
			<div class="vac-tmb-footer">
				<div class="vac-tmb-place">
					<p><?=$arItem["PROPERTIES"]["DIRECTION"]["VALUE"]?>, <?=$arItem["PROPERTIES"]["CITY"]["VALUE"]?></p>
				</div>
				
				<?$img = CFile::ResizeImageGet($arItem["PROPERTIES"]["LOGO_PREVIEW"]["VALUE"], Array("width" => 55, "height" => 37), BX_RESIZE_IMAGE_EXACT);?>
				<div class="vac-tmb-logo"><img src="<?=$img["src"]?>"></div>
			</div>
		</a>
	</div>

<?endforeach;?>