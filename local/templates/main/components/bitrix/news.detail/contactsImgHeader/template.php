<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="page-header">
    <div class="row ">
        <div class="col-6">
			<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["LEFT_IMG_HEADER"]["VALUE"], Array("width" => 800, "height" => 420), BX_RESIZE_IMAGE_EXACT);?>
            <div class="page-header-bg" style="background-image: url(<?=($img["src"]) ? $img["src"] : "/layout/files/page-header-bg-contacts-l.jpg"?>)"></div>
        </div>
        <div class="col-6">
			<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["RIGHT_IMG_HEADER"]["VALUE"], Array("width" => 800, "height" => 420), BX_RESIZE_IMAGE_EXACT);?>
            <div class="page-header-bg" style="background-image: url(<?=($img["src"]) ? $img["src"] : "/layout/files/page-header-bg-contacts-r.jpg"?>)"></div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="page-sidebar">
                    <ul class="page-menu">
						<?foreach ($arResult["MENU"] as $arItem):?>
							<?if ($arItem["SORT"] == 100):?>
                                <li><a href="#central"><?=$arItem["VALUE"]?></a></li>
                            <?endif;?>
							<?if ($arItem["SORT"] == 200):?>
                                <li><a href="#stores"><?=$arItem["VALUE"]?></a></li>
                            <?endif;?>
							<?if ($arItem["SORT"] == 300):?>
                                <li><a href="#distribution"><?=$arItem["VALUE"]?></a></li>
                            <?endif;?>
						<?endforeach;?>
                    </ul>
                </div>
            </div>