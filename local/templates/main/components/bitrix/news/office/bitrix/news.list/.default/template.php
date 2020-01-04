<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$count = count($arResult["ITEMS"]);?>
<?$countRow = 1;?>
<?$countInt = intval($count / 3)?>
<?$countFloat = fmod($count / 3, 1);?>
<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <?if ($countRow >= 4):?>
        <?$countRow = 1;?>
    <?endif;?>
    <?if (($countInt * 3) >= ($key + 1)):?>
        <?if ($countRow === 1):?>
            <div class="row">
                <div class="col-12 col-md-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <a class="dept-tmb" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
						<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 237, "height" => 160), BX_RESIZE_IMAGE_EXACT);?>
                        <div class="dept-tmb-pic" style="background-image: url(<?=$img["src"]?>)"></div>
                        <div class="dept-tmb-descr">
                            <div class="h3"><?=$arItem["NAME"]?></div>
                        </div>
                    </a>
                </div>
        <?endif;?>
        <?if ($countRow === 2):?>
                <div class="col-12 col-md-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <a class="dept-tmb" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
						<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 237, "height" => 160), BX_RESIZE_IMAGE_EXACT);?>
                        <div class="dept-tmb-pic" style="background-image: url(<?=$img["src"]?>)"></div>
                        <div class="dept-tmb-descr">
                            <div class="h3"><?=$arItem["NAME"]?></div>
                        </div>
                    </a>
                </div>
		<?endif;?>
		<?if ($countRow === 3):?>
                <div class="col-12 col-md-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <a class="dept-tmb" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
						<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 237, "height" => 160), BX_RESIZE_IMAGE_EXACT);?>
                        <div class="dept-tmb-pic" style="background-image: url(<?=$img["src"]?>)"></div>
                        <div class="dept-tmb-descr">
                            <div class="h3"><?=$arItem["NAME"]?></div>
                        </div>
                    </a>
                </div>
            </div>
        <?endif;?>
    <?else:?>
        <?if ($countFloat > 0 && $countFloat < 0.5):?>

            <div class="row">
                <div class="col-12 col-md-4"></div>
                <div class="col-12 col-md-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <a class="dept-tmb" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
						<?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 237, "height" => 160), BX_RESIZE_IMAGE_EXACT);?>
                        <div class="dept-tmb-pic" style="background-image: url(<?=$img["src"]?>)"></div>
                        <div class="dept-tmb-descr">
                            <div class="h3"><?=$arItem["NAME"]?></div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4"></div>
            </div>
		<?endif;?>
        <?if ($countFloat > 0.5):?>
            <?if ($count === 1):?>
                <div class="row">
                    <div class="col-12 col-md-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <a class="dept-tmb" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                            <?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 237, "height" => 160), BX_RESIZE_IMAGE_EXACT);?>
                            <div class="dept-tmb-pic" style="background-image: url(<?=$img["src"]?>)"></div>
                            <div class="dept-tmb-descr">
                                <div class="h3"><?=$arItem["NAME"]?></div>
                            </div>
                        </a>
                    </div>
            <?endif;?>
			<?if ($count === 2):?>
                    <div class="col-12 col-md-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <a class="dept-tmb" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                            <?$img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 237, "height" => 160), BX_RESIZE_IMAGE_EXACT);?>
                            <div class="dept-tmb-pic" style="background-image: url(<?=$img["src"]?>)"></div>
                            <div class="dept-tmb-descr">
                                <div class="h3"><?=$arItem["NAME"]?></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4"></div>
                </div>
			<?endif;?>
   
		<?endif;?>
	<?endif;?>
    <?$countRow++;?>
<?endforeach;?>