<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div>

<div class="career-nav-wrapper">
	<div class="career-nav-inner">
		<ul class="career-nav">
			<?foreach ($arResult["SECTION_LIST"] as $key => $arSect):?>
				<?if ($key == 0):?>
					<li><a class="active" href="#" data-tab="#careerTab<?=$key + 1?>"><?=$arSect["~NAME"]?></a></li>
				<?else:?>
					<li><a href="#" data-tab="#careerTab<?=$key + 1?>"><?=$arSect["~NAME"]?></a></li>
				<?endif;?>
			<?endforeach;?>
		</ul>
	</div>
</div>
<?
//pr($arResult["ITEMS"])
?>

<?foreach ($arResult["SECTION_LIST"] as $key => $arSect):?>
	<?if ($key == 0):?>
		<div class="career-tab career-tab-<?=$key + 1?> active" id="careerTab<?=$key + 1?>">
			<div class="career-tab-bg"><img src="<?=CFile::GetPath($arSect["PICTURE"])?>"></div>
			<div class="career-tab-content">
				<div class="career-tab-lead">
					<p><?=$arSect["~DESCRIPTION"]?></p>
				</div>
				<div class="block-wide">
					<div class="ladder-wrapper">
						<div class="ladder-nav-wrapper">
							<ul class="ladder-nav">
                                <?$count = 0;?>
								<?foreach ($arResult["ITEMS"] as $index => $arList):?>
                                    <?if ($arSect["ID"] == $arList["IBLOCK_SECTION_ID"]):?>
                                        <?if ($count == 0):?>
                                            <li class="active">
                                                <div class="ladder-nav-num">0<?=$count + 1?></div>
                                                <div class="ladder-nav-ttl">
                                                    <div class="cont"><?=$arList["NAME"]?></div>
                                                </div>
                                            </li>
                                        <?else:?>
                                            <li>
                                                <div class="ladder-nav-num">0<?=$count + 1?></div>
                                                <div class="ladder-nav-ttl">
                                                    <div class="cont"><?=$arList["NAME"]?></div>
                                                </div>
                                            </li>
                                        <?endif;?>
                                        <?$count++?>
									<?endif;?>
								<?endforeach;?>
							</ul>
						</div>
						<div class="ladder-slider-wrapper">
							<div class="ladder-slider">
								<?$count_level = 1;?>
								<?foreach ($arResult["ITEMS"] as $index => $arElement):?>
								    <?if ($arSect["ID"] == $arElement["IBLOCK_SECTION_ID"]):?>
                                        <?
                                        $this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arElement["IBLOCK_ID"], "ELEMENT_EDIT"));
                                        $this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arElement["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                        ?>
                                            <div class="slide" id="<?= $this->GetEditAreaId($arElement['ID']); ?>">
                                                <div class="ladder-item">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6">
                                                            <div class="ladder-item-header">
                                                                <div class="ladder-item-num">0<?=$count_level?></div>
                                                                <div class="ladder-item-ttl"><?=$arElement["PROPERTIES"]["FULL_NAME"]["VALUE"]?></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <div class="ladder-item-descr">
                                                                <div class="h3"><?=$arElement["PROPERTIES"]["TITLE_WHAT_I_DOING"]["VALUE"]?></div>
                                                                <p><?=$arElement["PROPERTIES"]["DESC_WHAT_I_DOING"]["~VALUE"]?></p>
                                                                <div class="h3"><?=$arElement["PROPERTIES"]["TITLE_WHERE_I_GO"]["VALUE"]?></div>
                                                                <p><?=$arElement["PROPERTIES"]["DESC_WHERE_I_GO"]["~VALUE"]?></p>
                                                                <div class="ladder-links">
                                                                    <div class="row">
                                                                        <?$count = 1;?>
                                                                        <?foreach ($arResult["SECTION_LIST"] as $keys => $arSections):?>
                                                                            <?if ($keys != $key):?>
                                                                                <div class="col-12 col-md-6">
                                                                                    <div class="ladder-link" data-tab="#careerTab<?=$keys + 1?>" data-slide="<?=($count == 1) ? $arElement["PROPERTIES"]["SIMILAR_POSTS"]["VALUE"][0]["PROPERTY_LEVEL_VALUE"] : $arElement["PROPERTIES"]["SIMILAR_POSTS"]["VALUE"][1]["PROPERTY_LEVEL_VALUE"]?>">
                                                                                        <div class="ladder-link-dept"><?=$arSections["~UF_MIN_NAME"]?></div>
                                                                                        <div class="ladder-link-ttl"><?=($count == 1) ? $arElement["PROPERTIES"]["SIMILAR_POSTS"]["VALUE"][0]["~NAME"] : $arElement["PROPERTIES"]["SIMILAR_POSTS"]["VALUE"][1]["~NAME"]?></div>
                                                                                    </div>
                                                                                </div>
                                                                                <?$count++?>
                                                                            <?endif;?>
                                                                        <?endforeach;?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
										<?$count_level++?>
									<?endif;?>
								<?endforeach;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?else:?>
        <div class="career-tab career-tab-<?=$key + 1?>" id="careerTab<?=$key + 1?>">
            <div class="career-tab-bg"><img src="<?=CFile::GetPath($arSect["PICTURE"])?>"></div>
            <div class="career-tab-content">
                <div class="career-tab-lead">
                    <p><?=$arSect["~DESCRIPTION"]?></p>
                </div>
                <div class="block-wide">
                    <div class="ladder-wrapper">
                        <div class="ladder-nav-wrapper">
                            <ul class="ladder-nav">
								<?$count = 0;?>
								<?foreach ($arResult["ITEMS"] as $index => $arList):?>
									<?if ($arSect["ID"] == $arList["IBLOCK_SECTION_ID"]):?>
										<?if ($count == 0):?>
                                            <li class="active">
                                                <div class="ladder-nav-num">0<?=$count + 1?></div>
                                                <div class="ladder-nav-ttl">
                                                    <div class="cont"><?=$arList["NAME"]?></div>
                                                </div>
                                            </li>
										<?else:?>
                                            <li>
                                                <div class="ladder-nav-num">0<?=$count + 1?></div>
                                                <div class="ladder-nav-ttl">
                                                    <div class="cont"><?=$arList["NAME"]?></div>
                                                </div>
                                            </li>
										<?endif;?>
										<?$count++?>
									<?endif;?>
								<?endforeach;?>
                            </ul>
                        </div>
                        <div class="ladder-slider-wrapper">
                            <div class="ladder-slider">
                                <?$count_level = 1;?>
								<?foreach ($arResult["ITEMS"] as $index => $arElement):?>
									<?if ($arSect["ID"] == $arElement["IBLOCK_SECTION_ID"]):?>
                                        <?
                                        $this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arElement["IBLOCK_ID"], "ELEMENT_EDIT"));
                                        $this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arElement["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                        ?>
                                        <div class="slide" id="<?= $this->GetEditAreaId($arElement['ID']); ?>">
                                            <div class="ladder-item">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <div class="ladder-item-header">
                                                            <div class="ladder-item-num">0<?=$count_level?></div>
                                                            <div class="ladder-item-ttl"><?=$arElement["PROPERTIES"]["FULL_NAME"]["VALUE"]?></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="ladder-item-descr">
                                                            <div class="h3"><?=$arElement["PROPERTIES"]["TITLE_WHAT_I_DOING"]["VALUE"]?></div>
                                                            <p><?=$arElement["PROPERTIES"]["DESC_WHAT_I_DOING"]["~VALUE"]?></p>
                                                            <div class="h3"><?=$arElement["PROPERTIES"]["TITLE_WHERE_I_GO"]["VALUE"]?></div>
                                                            <p><?=$arElement["PROPERTIES"]["DESC_WHERE_I_GO"]["~VALUE"]?></p>
                                                            <div class="ladder-links">
                                                                <div class="row">
                                                                    <?$count = 1;?>
                                                                    <?foreach ($arResult["SECTION_LIST"] as $keys => $arSections):?>
                                                                        <?if ($keys != $key):?>
                                                                            <div class="col-12 col-md-6">
                                                                                <div class="ladder-link" data-tab="#careerTab<?=$keys + 1?>" data-slide="<?=($count == 1) ? $arElement["PROPERTIES"]["SIMILAR_POSTS"]["VALUE"][0]["PROPERTY_LEVEL_VALUE"] : $arElement["PROPERTIES"]["SIMILAR_POSTS"]["VALUE"][1]["PROPERTY_LEVEL_VALUE"]?>">
                                                                                    <div class="ladder-link-dept"><?=$arSections["~UF_MIN_NAME"]?></div>
                                                                                    <div class="ladder-link-ttl"><?=($count == 1) ? $arElement["PROPERTIES"]["SIMILAR_POSTS"]["VALUE"][0]["~NAME"] : $arElement["PROPERTIES"]["SIMILAR_POSTS"]["VALUE"][1]["~NAME"]?></div>
                                                                                </div>
                                                                            </div>
                                                                        <?endif;?>
                                                                        <?$count++?>
                                                                    <?endforeach;?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?$count_level++?>
									<?endif;?>
								<?endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	
	<?endif;?>
<?endforeach;?>


</div>

