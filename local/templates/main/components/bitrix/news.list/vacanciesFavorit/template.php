<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

?>
<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <?if ($arItem["ACTIVE"] == "Y"):?>
        <div class="col-12 col-md-6">
            <a class="vac-tmb" href="<?=$arItem["DETAIL_PAGE_URL"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="vac-tmb-header">
                    <div class="h3"><?=$arItem["NAME"]?></div>
                    <div class="vac-tmb-remove" data-favorites-remove="<?=$arItem["ID"]?>">
                        <img class="svg-inline" src="/layout/images/ico-remove.svg">
                    </div>
                </div>
                <div class="vac-tmb-footer">
                    <div class="vac-tmb-place">
                        <p><?=$arItem["PROPERTIES"]["DIRECTION"]["VALUE"]?>, <?=$arItem["PROPERTIES"]["CITY"]["VALUE"]?></p>
                    </div>
        
                    <?if ($arItem["PROPERTIES"]["LOGO_PREVIEW"]["VALUE"] != ""):?>
                        <?$img = CFile::GetPath($arItem["PROPERTIES"]["LOGO_PREVIEW"]["VALUE"]);?>
                        <div class="vac-tmb-logo">
                            <img src="<?=$img?>">
                        </div>
                    <?endif;?>
                </div>
            </a>
        </div>
   <?else:?>
        <div class="col-12 col-md-6">
            <a class="vac-tmb vac-tmb-closed" href="" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="vac-tmb-header">
                    <div class="h3"><?=$arItem["NAME"]?></div>
                    <div class="vac-tmb-remove" data-favorites-remove="<?=$arItem["ID"]?>">
                        <img class="svg-inline" src="/layout/images/ico-remove.svg">
                    </div>
                </div>
                <div class="vac-tmb-footer">
                    <div class="vac-tmb-place">
                        <p><?=$arItem["PROPERTIES"]["DIRECTION"]["VALUE"]?>, <?=$arItem["PROPERTIES"]["CITY"]["VALUE"]?></p>
                    </div>
					
					<?if ($arItem["PROPERTIES"]["LOGO_PREVIEW"]["VALUE"] != ""):?>
						<?$img = CFile::GetPath($arItem["PROPERTIES"]["LOGO_PREVIEW"]["VALUE"]);?>
                        <div class="vac-tmb-logo">
                            <img src="<?=$img?>">
                        </div>
					<?endif;?>
                </div>
            </a>
        </div>
    
    
    
   <?endif;?>
<?endforeach;?>