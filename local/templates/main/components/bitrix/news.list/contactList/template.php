<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
//pr($arResult["ITEMS"][0]);
$count = 1;
$flagCentralOffice = false;
$flagCentralDistr = false;
?>
<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
	<?if (!$flagCentralOffice && $arItem["PROPERTIES"]["CENTRAL_OFFICE"]["VALUE"] == "Y" && $arItem["PROPERTIES"]["VIEW_CONTACTS"]["VALUE"] == "Y"):?>
        <?$flagCentralOffice = true;?>
        <div class="offices-section"><a name="central"></a>
            <div class="h2"><?=($arItem["PROPERTIES"]["CENTRAL_OFFICE"]["NAME"]) ? $arItem["PROPERTIES"]["CENTRAL_OFFICE"]["NAME"] : "Центральный офис"?></div>
            <div class="offices-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="offices-item-descr">
                    <div class="contacts-item">
                        <div class="contacts-address">
                            <p><?=$arItem["NAME"]?></p>
                        </div>
                    </div>
                    <div class="contacts-item">
                        <?if (is_array($arItem["PROPERTIES"]["PHONE"]["VALUE"])):?>
                            <div class="contacts-item"><a class="contacts-phone" href="tel:<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"][0]?>"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"][0]?></a></div>
                        <?else:?>
                            <div class="contacts-item"><a class="contacts-phone" href="tel:<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?></a></div>
                        <?endif;?>
                    </div>
                    
                    <?if ($arItem["PROPERTIES"]["EMAIL"]["VALUE"]):?>
                        <div class="contacts-item"><a class="contacts-email" href="mailto:<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?></a></div>
                    <?endif;?>
                    <div class="contacts-button"><a class="btn btn-1" href="#" data-toggle="modal" data-target="#feedbackModal"><span>Написать</span></a></div>
                </div>
                <?if ($arItem["PROPERTIES"]["POINTER_MAP"]["VALUE"]):?>
                    <div class="offices-item-map">
                        <div class="office-map" id="contactsMap<?=$key + 1?>" data-geo="<?=$arItem["PROPERTIES"]["POINTER_MAP"]["VALUE"]?>"></div>
                    </div>
				<?endif;?>
            </div>
        </div>
        <div class="offices-section"><a name="stores"></a>
            <?if (count($arResult["ITEMS"]) >= 3):?>
                <div class="h2">Фирменные магазины</div>
            <?endif;?>
	<?endif;?>
	
	
	<?if ($key != 0 && ($key + 1) != count($arResult["ITEMS"])
                && $arItem["PROPERTIES"]["VIEW_CONTACTS"]["VALUE"] == "Y"
                && !$arItem["PROPERTIES"]["CENTRAL_DISTR"]["VALUE"] == "Y"
                && !$arItem["PROPERTIES"]["CENTRAL_OFFICE"]["VALUE"] == "Y"
        ):?>

            <div class="offices-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="offices-item-descr">
                    <?if ($arItem["PROPERTIES"]["GEOLOCATION"]["VALUE"]):?>
                        <div class="offices-item-region-wrapper">
                            <div class="offices-item-region"><?=$arItem["PROPERTIES"]["GEOLOCATION"]["VALUE"]?></div>
                        </div>
                    <?endif;?>
                    <div class="contacts-item">
                        <div class="contacts-address">
                            <p><?=$arItem["NAME"]?></p>
                        </div>
                    </div>
                    <?if (is_array($arItem["PROPERTIES"]["PHONE"]["VALUE"])):?>
                        <div class="contacts-item"><a class="contacts-phone" href="tel:<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"][0]?>"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"][0]?></a></div>
                    <?else:?>
                        <div class="contacts-item"><a class="contacts-phone" href="tel:<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?></a></div>
                    <?endif;?>
                    <?if ($arItem["PROPERTIES"]["EMAIL"]["VALUE"]):?>
                        <div class="contacts-item"><a class="contacts-email" href="mailto:<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?></a></div>
                    <?endif;?>
                </div>
                <?if ($arItem["PROPERTIES"]["POINTER_MAP"]["VALUE"]):?>
                    <div class="offices-item-map">
                        <div class="office-map" id="contactsMap<?=$key + 1?>" data-geo="<?=$arItem["PROPERTIES"]["POINTER_MAP"]["VALUE"]?>"></div>
                    </div>
                <?endif;?>
            </div>
	<?endif;?>
	
	
	<?if (!$flagCentralDistr && $arItem["PROPERTIES"]["CENTRAL_DISTR"]["VALUE"] == "Y" && $arItem["PROPERTIES"]["VIEW_CONTACTS"]["VALUE"] == "Y"):?>
        <?$flagCentralDistr = true;?>
        </div>
        <div class="offices-section"><a name="distribution"></a>
            <div class="h2"><?=($arItem["PROPERTIES"]["CENTRAL_DISTR"]["NAME"]) ? $arItem["PROPERTIES"]["CENTRAL_DISTR"]["NAME"] : "Центр дистрибуции"?></div>
    
            <div class="offices-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="offices-item-descr">
                    <div class="contacts-item">
                        <div class="contacts-address">
                            <p><?=$arItem["NAME"]?></p>
                        </div>
                    </div>
					<?if (is_array($arItem["PROPERTIES"]["PHONE"]["VALUE"])):?>
                        <div class="contacts-item"><a class="contacts-phone" href="tel:<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"][0]?>"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"][0]?></a></div>
					<?else:?>
                        <div class="contacts-item"><a class="contacts-phone" href="tel:<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?></a></div>
					<?endif;?>
		            <?if ($arItem["PROPERTIES"]["EMAIL"]["VALUE"]):?>
                        <div class="contacts-item"><a class="contacts-email" href="mailto:<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?></a></div>
					<?endif;?>
                </div>
                <?if ($arItem["PROPERTIES"]["POINTER_MAP"]["VALUE"]):?>
                    <div class="offices-item-map">
                        <div class="office-map" id="contactsMap<?=$key + 1?>" data-geo="<?=$arItem["PROPERTIES"]["POINTER_MAP"]["VALUE"]?>"></div>
                    </div>
                <?endif;?>
            </div>
        </div>
<!--        <div class="offices-section"><a name="distribution"></a>-->
<!--            <div class="h2">центр дистрибуции</div>-->
<!--            <div class="offices-item">-->
<!--                <div class="offices-item-descr">-->
<!--                    <div class="contacts-item">-->
<!--                        <div class="contacts-address">-->
<!--                            <p>Московская область, Чеховский район, сельское поселение Баранцевское, село Новоселки, промышленная зона Новоселки, владение 19, строение 6</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="contacts-item"><a class="contacts-phone" href="tel:+7 (495) 651-65-55">+7 (495) 651-65-55</a></div>-->
<!--                    <div class="contacts-item"><a class="contacts-email" href="mailto:adistart@adidas-group.com">adistart@adidas-group.com</a></div>-->
<!--                </div>-->
<!--                <div class="offices-item-map">-->
<!--                    <div class="office-map" id="officeMap6"></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
	<?endif;?>

<?endforeach;?>