<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get">
	<?foreach($arResult["ITEMS"] as $arItem):
		if(array_key_exists("HIDDEN", $arItem)):
			echo $arItem["INPUT"];
		endif;
	endforeach;?>
    <div class="form-group">
        <label for="vac_city"><?=$arResult["ITEMS"]["PROPERTY_51"]["NAME"]?></label>
        <select class="select-alt" name="vac_city" id="vac_city">
            <option value="1">Все города</option>
            <?foreach($arResult["LIST_CITY"] as $key => $arItem):?>
                <option value="<?=$key + 2?>"><?=$arItem["UF_NAME"]?></option>
            <?endforeach;?>
        </select>
    </div>
    <div class="form-group">
        <label><?=$arResult["ITEMS"]["PROPERTY_53"]["NAME"]?></label>
        <div class="form-radios">
            <div class="form-radio">
                <input type="radio" name="arrFilter_pf[DIRECTION]" id="vac_direction_1" value="" checked>
                <label for="vac_direction_1">Все направления</label>
            </div>
            <div class="form-radio">
                <input type="radio" name="arrFilter_pf[DIRECTION]" id="vac_direction_2" value="1">
                <label for="vac_direction_2"><?=$arResult["ITEMS"]["PROPERTY_53"]["LIST"]["1"]?></label>
            </div>
            <div class="form-radio">
                <input type="radio" name="arrFilter_pf[DIRECTION]" id="vac_direction_3" value="2">
                <label for="vac_direction_3"><?=$arResult["ITEMS"]["PROPERTY_53"]["LIST"]["2"]?></label>
            </div>
            <div class="form-radio">
                <input type="radio" name="arrFilter_pf[DIRECTION]" id="vac_direction_4" value="3">
                <label for="vac_direction_4"><?=$arResult["ITEMS"]["PROPERTY_53"]["LIST"]["3"]?></label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label><?=$arResult["ITEMS"]["PROPERTY_54"]["NAME"]?></label>
        <div class="form-radios">
            <div class="form-radio">
                <input type="radio" name="arrFilter_pf[TYPE_EMPLOYMENT]" id="vac_type_1" value="" checked>
                <label for="vac_type_1">Все типы занятости</label>
            </div>
            <div class="form-radio">
                <input type="radio" name="arrFilter_pf[TYPE_EMPLOYMENT]" id="vac_type_2" value="4">
                <label for="vac_type_2"><?=$arResult["ITEMS"]["PROPERTY_54"]["LIST"]["4"]?></label>
            </div>
            <div class="form-radio">
                <input type="radio" name="arrFilter_pf[TYPE_EMPLOYMENT]" id="vac_type_3" value="5">
                <label for="vac_type_3"><?=$arResult["ITEMS"]["PROPERTY_54"]["LIST"]["5"]?></label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label><?=$arResult["ITEMS"]["PROPERTY_55"]["NAME"]?></label>
        <div class="form-radios">
            <div class="form-radio">
                <input type="radio" name="arrFilter_pf[BRAND]" id="vac_brand_1" value="" checked>
                <label for="vac_brand_1">Все бренды</label>
            </div>
            <div class="form-radio">
                <input type="radio" name="arrFilter_pf[BRAND]" id="vac_brand_2" value="6">
                <label for="vac_brand_2"><?=$arResult["ITEMS"]["PROPERTY_55"]["LIST"]["6"]?></label>
            </div>
            <div class="form-radio">
                <input type="radio" name="arrFilter_pf[BRAND]" id="vac_brand_3" value="7">
                <label for="vac_brand_3"><?=$arResult["ITEMS"]["PROPERTY_55"]["LIST"]["7"]?></label>
            </div>
        </div>
    </div>

<!--    <input type="submit" name="set_filter" value="Найти" /><input type="hidden" name="set_filter" value="Y" />-->
</form>
