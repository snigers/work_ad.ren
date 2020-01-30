<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>


    <select class="city-select" name="stores_city" id="stores_city">
        <?foreach($arResult['SECTIONS'] as $key => $arSection):?>
            <option value="<?=$key + 1?>" data-stores="<?=$arResult["JSON_FILE"][$key]?>" selected><?=$arSection["NAME"]?></option>
        <?endforeach;?>
    </select>

