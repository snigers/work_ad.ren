<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="row">
	<div class="col-12 col-md-7">
		<?$img = CFile::ResizeImageGet($arResult["PREVIEW_PICTURE"]["ID"], Array("width" => 750, "height" => 500), BX_RESIZE_IMAGE_EXACT);?>
		<div class="dept-teaser-pic"><img src="<?=$img["src"]?>"></div>
	</div>
	<div class="col-12 col-md-5">
		<div class="dept-teaser-descr">
			<div class="h2"><?=$arResult["NAME"]?></div>
			<?=$arResult["~PREVIEW_TEXT"]?>
			<?if ($arResult["PROPERTIES"]["LINK_BTN"]["VALUE"]):?>
				<div class="dept-teaser-button"><a class="btn btn-1" href="<?=$arResult["PROPERTIES"]["LINK_BTN"]["VALUE"]?>"><?=$arResult["PROPERTIES"]["TITLE_BTN"]["~VALUE"]?></a></div>
			<?endif;?>
		</div>
	</div>
</div>
