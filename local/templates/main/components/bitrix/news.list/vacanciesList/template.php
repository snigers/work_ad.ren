<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

?>

<div class="vac-list">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<a class="vac-tmb" href="<?=$arItem["DETAIL_PAGE_URL"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="vac-tmb-header">
				<div class="h3"><?=$arItem["NAME"]?></div>
                <?//Проверяем есть ли элемент в избранном и или его удаляем от туда или добавляем по клику в избранное?>
                <?$favorites = array_search($arItem["ID"],$_SESSION["LIST_FAVORITES"]);?>
				<div class="vac-tmb-fav <?=(is_numeric($favorites)) ? "favorites-true" : ""?>" data-favorites-vac="<?=$arItem["ID"]?>" data-favorites="<?=(is_numeric($favorites)) ? "1" : "0"?>">
					<img class="svg-inline" src="/layout/images/ico-fav.svg">
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
	<?endforeach;?>
</div>
<div class="list-controls list-controls-bottom">
    <div class="list-controls-l">
        <div class="page-nav">
            <div class="modern-page-navigation"><span class="modern-page-title">Страницы:</span>
                <? echo $arResult["NAV_STRING"]?>
            </div>
        </div>
    </div>
	
	<div class="list-controls-r">
		<div class="show-num">
			<div class="show-num-ttl">Показать по</div>
			<div class="show-num-buttons">
				<div class="show-num-buttons-item">
					<button class="active">12</button>
				</div>
				<div class="show-num-buttons-item">
					<button>24</button>
				</div>
				<div class="show-num-buttons-item">
					<button>36</button>
				</div>
			</div>
		</div>
	</div>
</div>
<?


?>