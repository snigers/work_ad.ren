<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

<?if ($arResult["PROPERTIES"]["TITLE_TRAINING"]["VALUE"] ||
	$arResult["PROPERTIES"]["SUBTITLE_FULL_TIME"]["VALUE"] ||
	$arResult["PROPERTIES"]["IMG_FULL_TIME"]["VALUE"] ||
	$arResult["PROPERTIES"]["DESCRIPTION_FULL_TIME"]["VALUE"] ||
	$arResult["PROPERTIES"]["SUBTITLE_PROGRAM"]["VALUE"] ||
	$arResult["PROPERTIES"]["SUBTITLE_DISTANCE"]["VALUE"] ||
	$arResult["PROPERTIES"]["IMG_DISTANCE"]["VALUE"] ||
	$arResult["PROPERTIES"]["DESCRIPTION_DISTANCE"]["VALUE"] ||
	$arResult["PROPERTIES"]["LIST_PROGRAM"]["VALUE"]
):?>
		<?if ($arResult["PROPERTIES"]["TITLE_TRAINING"]["VALUE"]):?>
			<h2 id="<?= $this->GetEditAreaId($arResult['ID']); ?>"><?=$arResult["PROPERTIES"]["TITLE_TRAINING"]["VALUE"]?></h2>
		<?endif;?>
		<?if ($arResult["PROPERTIES"]["SUBTITLE_FULL_TIME"]["VALUE"]):?>
			<h3><?=$arResult["PROPERTIES"]["SUBTITLE_FULL_TIME"]["VALUE"]?></h3>
		<?endif;?>
	
		<div class="content-row">
			<?if ($arResult["PROPERTIES"]["IMG_FULL_TIME"]["VALUE"]):?>
				<div class="article-pic article-pic-l">
					<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["IMG_FULL_TIME"]["VALUE"], Array("width" => 358, "height" => 358), BX_RESIZE_IMAGE_EXACT);?>
					<div class="article-pic-pic"><img src="<?=$img["src"]?>"></div>
				</div>
			<?endif;?>
		
			<?if ($arResult["PROPERTIES"]["DESCRIPTION_FULL_TIME"]["VALUE"]):?>
				<p><?=$arResult["PROPERTIES"]["DESCRIPTION_FULL_TIME"]["~VALUE"]["TEXT"]?></p>
			<?endif;?>
		</div>
	
        <?if ($arResult["PROPERTIES"]["SUBTITLE_PROGRAM"]["VALUE"]):?>
            <h4><?=$arResult["PROPERTIES"]["SUBTITLE_PROGRAM"]["VALUE"]?></h4>
        <?endif;?>
        <?if ($arResult["PROPERTIES"]["LIST_PROGRAM"]["VALUE"]):?>
            <ol class="ol-alt">
                <?foreach($arResult["PROPERTIES"]["LIST_PROGRAM"]["~VALUE"] as $arItem):?>
                    <li><?=$arItem?></li>
                <?endforeach;?>
            </ol>
        <?endif;?>
		
		
		<?if ($arResult["PROPERTIES"]["SUBTITLE_DISTANCE"]["VALUE"]):?>
			<h3><?=$arResult["PROPERTIES"]["SUBTITLE_DISTANCE"]["VALUE"]?></h3>
		<?endif;?>
		
		<div class="content-row">
			<?if ($arResult["PROPERTIES"]["IMG_DISTANCE"]["VALUE"]):?>
				<div class="article-pic article-pic-l">
					<?$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["IMG_DISTANCE"]["VALUE"], Array("width" => 358, "height" => 358), BX_RESIZE_IMAGE_EXACT);?>
					<div class="article-pic-pic"><img src="<?=$img["src"]?>"></div>
				</div>
			<?endif;?>
			
			<?if ($arResult["PROPERTIES"]["DESCRIPTION_DISTANCE"]["VALUE"]):?>
				<p><?=$arResult["PROPERTIES"]["DESCRIPTION_DISTANCE"]["~VALUE"]["TEXT"]?></p>
			<?endif;?>
		</div>
<?endif;?>