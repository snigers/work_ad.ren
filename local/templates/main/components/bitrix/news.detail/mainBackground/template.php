<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["LEFT_IMG"]["VALUE"], Array("width" => 800, "height" => 600), BX_RESIZE_IMAGE_EXACT);?>
<div class="section-top-bg section-top-bg-l" style="background:url(<?=$img["src"]?>);"></div>
<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["RIGHT_IMG"]["VALUE"], Array("width" => 800, "height" => 600), BX_RESIZE_IMAGE_EXACT);?>
<div class="section-top-bg section-top-bg-r" style="background:url(<?=$img["src"]?>);"></div>