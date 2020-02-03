<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<div class="features-list">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="feature-tmb" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 261, "height" => 190), BX_RESIZE_IMAGE_EXACT);?>
            <div class="feature-tmb-pic"><img src="<?=$img["src"]?>"></div>
            <div class="feature-tmb-descr">
                <h4><?=$arItem["~NAME"]?></h4>
                <?=$arItem["PREVIEW_TEXT"]?>
            </div>
        </div>
            
    <?endforeach;?>
</div>