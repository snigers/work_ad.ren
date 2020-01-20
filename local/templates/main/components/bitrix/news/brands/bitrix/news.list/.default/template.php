<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="col-12 col-md-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <a class="brand-tmb" href="<?=$arItem["DETAIL_PAGE_URL"]?>" >
            <div class="brand-tmb-pic" style="background-image:url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);"></div>
            <div class="brand-tmb-descr">
                <div class="h3"><?=$arItem["NAME"]?></div>
            </div>
        </a>
    </div>
<?endforeach;?>
