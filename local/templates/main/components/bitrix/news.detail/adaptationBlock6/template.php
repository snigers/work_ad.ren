<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

<?if ($arResult["PROPERTIES"]["TITLE"]["VALUE"] ||
	$arResult["PROPERTIES"]["DESCRIPTION"]["VALUE"] ||
	$arResult["PROPERTIES"]["TITLE_LIST"]["VALUE"] ||
	$arResult["PROPERTIES"]["QUOTE"]["VALUE"] ||
	$arResult["PROPERTIES"]["LIST"]["VALUE"]
):?>
		<?if ($arResult["PROPERTIES"]["TITLE"]["VALUE"]):?>
			<h2 id="<?= $this->GetEditAreaId($arResult['ID']); ?>"><?=$arResult["PROPERTIES"]["TITLE"]["~VALUE"]?></h2>
		<?endif;?>
		
<!--		-->
<!--		--><?//if ($arResult["PROPERTIES"]["DESCRIPTION"]["VALUE"]):?>
<!--			<p>--><?//=$arResult["PROPERTIES"]["DESCRIPTION"]["~VALUE"]["TEXT"]?><!--</p>-->
<!--		--><?//endif;?>
<!--		-->
		<?if ($arResult["PREVIEW_PICTURE"]["SRC"]):?>
			<?$img = CFile::ResizeImageGet($arResult["PREVIEW_PICTURE"]["ID"], Array("width" => 746, "height" => 724), BX_RESIZE_IMAGE_EXACT);?>
			<div class="article-pic article-pic-big"><img src="<?=$img["src"]?>"></div>
		<?endif;?>
		
		
		<?if ($arResult["PROPERTIES"]["TITLE_LIST"]["VALUE"]):?>
			<h4><?=$arResult["PROPERTIES"]["TITLE_LIST"]["VALUE"]?></h4>
		<?endif;?>
		
		
		<?if ($arResult["PROPERTIES"]["LIST"]["VALUE"]):?>
			<ol class="ol-alt">
				<?foreach ($arResult["PROPERTIES"]["LIST"]["~VALUE"] as $arItem):?>
					<li><?=$arItem["TEXT"]?></li>
				<?endforeach;?>
			</ol>
		<?endif;?>
		
		
		<?if ($arResult["PROPERTIES"]["QUOTE"]["VALUE"]):?>
			<blockquote>
				<div class="blockquote-content">
					<?=$arResult["PROPERTIES"]["QUOTE"]["~VALUE"]["TEXT"]?>
				</div>
			</blockquote>
		<?endif;?>
		

<?endif;?>