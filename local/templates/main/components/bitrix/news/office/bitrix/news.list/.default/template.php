<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$count = count($arResult["ITEMS"]);?>
<div class="row">
    <?foreach($arResult["ITEMS"] as $key => $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <?if (($key + 1) == $count):?>
            <div class="col-6 col-md-6 col-lg-4 d-none d-md-block"></div>
            <div class="col-6 col-md-6 col-lg-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <a class="dept-tmb" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
					<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 237, "height" => 160), BX_RESIZE_IMAGE_EXACT);?>
                    <div class="dept-tmb-pic" style="background-image: url(<?=$img["src"]?>)"></div>
                    <div class="dept-tmb-descr">
                        <div class="h3"><?=$arItem["NAME"]?></div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-6 col-lg-4"></div>
        <?else:?>
            <div class="col-6 col-md-6 col-lg-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <a class="dept-tmb" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
					<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 237, "height" => 160), BX_RESIZE_IMAGE_EXACT);?>
                    <div class="dept-tmb-pic" style="background-image: url(<?=$img["src"]?>)"></div>
                    <div class="dept-tmb-descr">
                        <div class="h3"><?=$arItem["NAME"]?></div>
                    </div>
                </a>
            </div>
        <?endif;?>
    <?endforeach;?>
</div>