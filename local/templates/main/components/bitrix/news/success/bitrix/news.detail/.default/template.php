<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?//pr($arResult)?>
<?//pr($_REQUEST["NEXT_DETAIL"])?>

<div class="popup-header">
	<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["IMG_HEADER_DETAIL"]["VALUE"], Array("width" => 869, "height" => 420), BX_RESIZE_IMAGE_EXACT);?>
    <div class="popup-header-pic"><img src="<?=$img["src"]?>"/></div>
    <div class="popup-header-title">
        <div class="popup-header-title-l">
            <div class="h2"><?=$arResult["NAME"]?></div>
            <div class="popup-header-post">
                <p><?=$arResult["PROPERTIES"]["POSITION"]["VALUE"]?>, <?=$arResult["PROPERTIES"]["CITY"]["VALUE"]?></p>
            </div>
        </div>
        <div class="popup-header-title-r">
            <div class="popup-soclinks"><a class="popup-soclink" href="<?=$arResult["PROPERTIES"]["LINK_SOC_NETWORK"]["VALUE"]?>">
                    <img class="svg-inline" src="<?=($arResult["PROPERTIES"]["LOGO_SOC_NET"]["VALUE"]) ? CFile::GetPath($arResult["PROPERTIES"]["LOGO_SOC_NET"]["VALUE"]) : "images/ico-vk-big.svg"?>"/></a></div>
        </div>
    </div>
</div>
<div class="popup-body">
    <div class="story-info">
        <div class="story-info-item">
            <div class="story-info-item-ttl">
                <p><?=($arResult["PROPERTIES"]["TITLE_EDUCATION"]["VALUE"]) ? $arResult["PROPERTIES"]["TITLE_EDUCATION"]["VALUE"] : "Образование"?></p>
            </div>
            <div class="story-info-item-descr">
                <p><?=$arResult["PROPERTIES"]["PLACE_OF_STUDY"]["VALUE"]?></p>
            </div>
        </div>
        <div class="story-info-item">
            <div class="story-info-item-ttl">
                <p><?=($arResult["PROPERTIES"]["TITLE_AGE_FIRST_WORK"]["VALUE"]) ? $arResult["PROPERTIES"]["TITLE_AGE_FIRST_WORK"]["VALUE"] : "Возраст, с которого работает"?></p>
            </div>
            <div class="story-info-item-descr">
                <p class="big"><?=$arResult["PROPERTIES"]["AGE_FIRST_WORK"]["VALUE"]?></p>
            </div>
        </div>
    </div>
    <?if ($arResult["PROPERTIES"]["QUOTE_DETAIL"]["VALUE"]):?>
        <blockquote class="blockquote-story">
            <div class="blockquote-content">
                <?=$arResult["PROPERTIES"]["QUOTE_DETAIL"]["~VALUE"]["TEXT"]?>
            </div>
        </blockquote>
    <?endif;?>
    <div class="h3"><?=($arResult["PROPERTIES"]["TITLE_GOT_INTO_COMPANY"]["VALUE"]) ? $arResult["PROPERTIES"]["TITLE_GOT_INTO_COMPANY"]["VALUE"] : "Как я попала в компанию"?></div>
        <?=$arResult["PROPERTIES"]["DESCRIPTION_GOT_INTO_COMPANY"]["~VALUE"]["TEXT"]?>
    <div class="block-popup-wide">
        <div class="popup-pics">
            <div class="row">
                <?foreach ($arResult["PROPERTIES"]["BLOCK_IMG"]["VALUE"] as $arItem):?>
					<?$img = CFile::ResizeImageGet($arItem, Array("width" => 434, "height" => 360), BX_RESIZE_IMAGE_EXACT);?>
                    <div class="col-6"><img src="<?=$img["src"]?>"/></div>
                <?endforeach;?>
            </div>
        </div>
    </div>
    <div class="h3"><?=($arResult["PROPERTIES"]["TITLE_WHY_LIKE_WORK"]["VALUE"]) ? $arResult["PROPERTIES"]["TITLE_WHY_LIKE_WORK"]["VALUE"] : "Почему я люблю свою работу?"?></div>
	<?=$arResult["PROPERTIES"]["DESC_WHY_LIKE_WORK"]["~VALUE"]["TEXT"]?>
</div>
<div class="popup-footer"><a class="next-story-link" href="#" data-popup="#storyPopup" data-popup-content="" data-hash="">
		<?$img = CFile::ResizeImageGet($arResult["NEXT_ITEM"]["PROPERTY_IMG_HEADER_DETAIL_VALUE"], Array("width" => 869, "height" => 260), BX_RESIZE_IMAGE_EXACT);?>
        <div class="next-story-link-arrow"><img class="svg-inline" src="/layout/images/next-arrow.svg"/></div>
        <div class="next-story-link-pic" style="background-image:url(<?=$img["src"]?>)"></div>
        <div class="next-story-link-descr">
            <div class="next-story-link-descr-top">
                <div class="next-story-link-ttl">Следующая история</div>
            </div>
            <div class="next-story-link-descr-bottom">
                <div class="next-story-link-name">
                    <p><?=$arResult["NEXT_ITEM"]["NAME"]?></p>
                </div>
                <div class="next-story-link-post">
                    <p><?=$arResult["NEXT_ITEM"]["PROPERTY_POSITION_VALUE"]?></p>
                </div>
            </div>
        </div></a></div>