<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
//pr($arResult["ITEMS"][2]);
$count = 1;
?>
<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<!--	<p class="news-item" id="--><?//=$this->GetEditAreaId($arItem['ID']);?><!--">-->
    <?if ($arItem["PROPERTIES"]["TYPE_OFFICE"]["VALUE_SORT"] == 100 && $count == 1):?>
        <?$count = 2;?>
	<?endif;?>
	
	
	<?if ($arItem["PROPERTIES"]["TYPE_OFFICE"]["VALUE_SORT"] == 200 && $count == 2):?>
        <?$count = 3;?>
    <?endif;?>
	
	<?if ($arItem["PROPERTIES"]["TYPE_OFFICE"]["VALUE_SORT"] == 300 && $count == 3):?>
	<?endif;?>
	
	<?if ($key == 0 && $arItem["PROPERTIES"]["CENTRAL_OFFICE"]["VALUE"] == "Y"):?>
        <div class="offices-section"><a name="central"></a>
            <div class="h2"><?=$arItem["PROPERTIES"]["CENTRAL_OFFICE"]["NAME"]?></div>
            <div class="offices-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="offices-item-descr">
                    <div class="contacts-item">
                        <div class="contacts-address">
                            <p><?=$arItem["NAME"]?></p>
                        </div>
                    </div>
                    <div class="contacts-item">
                        <?if (is_array($arItem["PROPERTIES"]["PHONE"]["VALUE"])):?>
                            <a class="contacts-phone" href="tel:<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"][0]?>"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"][0]?></a>
                        <?else:?>
                            <a class="contacts-phone" href="tel:<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?></a>
                        <?endif;?>
                    </div>
                    <div class="contacts-item"><a class="contacts-email" href="mailto:<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?></a></div>
                    <div class="contacts-button"><a class="btn btn-1" href="#"><span>Написать</span></a></div>
                </div>
                <div class="offices-item-map">
<!--                    <div class="office-map" id="contactsMap--><?//=$key + 1?><!--" data-geo="--><?//=$arItem["PROPERTIES"]["POINTER_MAP"]["VALUE"]?><!--">-->
                    <div class="office-map" id="contactsMap<?=$key + 1?>" data-geo="55.856672,37.616654">
<!--                        --><?//$geo = explode(",", $arItem["PROPERTIES"]["POINTER_MAP"]["VALUE"])?>
<!--						--><?//$APPLICATION->IncludeComponent(
//							"bitrix:map.yandex.view",
//							"",
//							Array(
//								"INIT_MAP_TYPE" => "MAP",
//								"MAP_DATA" =>   serialize(array(['LON' => $geo[0], 'LAT' => $geo[1], 'TEXT' =>$arItem["NAME"]])),
//								"MAP_WIDTH" => "358",
//								"MAP_HEIGHT" => "229",
//								"CONTROLS" => array("ZOOM", "SMALLZOOM", "SCALELINE"),
//								"OPTIONS" => array(),
//								"MAP_ID" => ""
//							)
//						);?>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="offices-section"><a name="stores"></a>
            <div class="h2"><?=$arItem["PROPERTIES"]["TYPE_OFFICE"]["VALUE"]?></div>
	<?endif;?>
	
	
	<?if ($key != 0 && ($key + 1) != count($arResult["ITEMS"])):?>

        <div class="offices-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="offices-item-descr">
                <div class="offices-item-region-wrapper">
                    <div class="offices-item-region"><?=$arItem["PROPERTIES"]["GEOLOCATION"]["VALUE"]?></div>
                </div>
                <div class="contacts-item">
                    <div class="contacts-address">
                        <p><?=$arItem["NAME"]?></p>
                    </div>
                </div>
				<?if (is_array($arItem["PROPERTIES"]["PHONE"]["VALUE"])):?>
                    <a class="contacts-phone" href="tel:<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"][0]?>"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"][0]?></a>
				<?else:?>
                    <a class="contacts-phone" href="tel:<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?></a>
				<?endif;?>
                <div class="contacts-item"><a class="contacts-email" href="mailto:<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?></a></div>
            </div>
            <div class="offices-item-map">
                <div class="office-map" id="contactsMap<?=$key + 1?>" data-geo="<?=$arItem["PROPERTIES"]["POINTER_MAP"]["VALUE"]?>"></div>
            </div>
        </div>
	
	<?endif;?>
	
	
	<?if (($key + 1) == count($arResult["ITEMS"]) && $arItem["PROPERTIES"]["CENTRAL_DISTR"]["VALUE"] == "Y"):?>
        </div>
        <div class="offices-section"><a name="distribution"></a>
            <div class="h2"><?=$arItem["PROPERTIES"]["CENTRAL_DISTR"]["NAME"]?></div>
    
            <div class="offices-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="offices-item-descr">
                    <div class="contacts-item">
                        <div class="contacts-address">
                            <p><?=$arItem["NAME"]?></p>
                        </div>
                    </div>
					<?if (is_array($arItem["PROPERTIES"]["PHONE"]["VALUE"])):?>
                        <a class="contacts-phone" href="tel:<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"][0]?>"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"][0]?></a>
					<?else:?>
                        <a class="contacts-phone" href="tel:<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?></a>
					<?endif;?>
                    <div class="contacts-item"><a class="contacts-email" href="mailto:<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?></a></div>
                </div>
                <div class="offices-item-map">
                    <div class="office-map" id="contactsMap<?=$key + 1?>" data-geo="<?=$arItem["PROPERTIES"]["POINTER_MAP"]["VALUE"]?>"></div>
                </div>
            </div>
        </div>
	<?endif;?>

<?endforeach;?>