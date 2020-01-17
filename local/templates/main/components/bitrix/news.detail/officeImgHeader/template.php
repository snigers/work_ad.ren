<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="row">
    <div class="col-6">
		<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["LEFT_IMG_HEADER"]["VALUE"], Array("width" => 800, "height" => 420), BX_RESIZE_IMAGE_EXACT);?>
        <div class="page-header-bg" style="background-image: url(<?=($img["src"]) ? $img["src"] : "/layout/files/page-header-bg-typography-l.jpg"?>)"></div>
    </div>
    <div class="col-6">
		<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["RIGHT_IMG_HEADER"]["VALUE"], Array("width" => 800, "height" => 420), BX_RESIZE_IMAGE_EXACT);?>
        <div class="page-header-bg" style="background-image: url(<?=($img["src"]) ? $img["src"] : "/layout/files/page-header-bg-typography-l.jpg"?>)"></div>
    </div>
</div>