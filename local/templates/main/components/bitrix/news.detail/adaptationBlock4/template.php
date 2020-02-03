<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

<?if ($arResult["PROPERTIES"]["IMG"]["VALUE"] ||
	$arResult["PROPERTIES"]["QUOTE"]["VALUE"] ||
	$arResult["PROPERTIES"]["AUTHER"]["VALUE"] ||
	$arResult["PROPERTIES"]["POSITION"]["VALUE"] ||
	$arResult["PROPERTIES"]["CITY"]["VALUE"] ||
	$arResult["PROPERTIES"]["DESCRIPTION_QUOTE"]["VALUE"]
):?>
	<div class="block-wide" id="<?= $this->GetEditAreaId($arResult['ID']); ?>">
		<div class="blockquote-alt-wrapper">
			<?if ($arResult["PROPERTIES"]["IMG"]["VALUE"]):?>
				<div class="blockquote-alt-pics">
					<div class="row">
						<?foreach ($arResult["PROPERTIES"]["IMG"]["VALUE"] as $key => $arImg):?>
							<?if ($key < 2):?>
								<?$img = CFile::ResizeImageGet($arImg, Array("width" => 650, "height" => 500), BX_RESIZE_IMAGE_EXACT);?>
								<div class="col-6"><img src="<?=$img["src"]?>"></div>
							<?endif;?>
						<?endforeach;?>
					</div>
				</div>
			<?endif;?>
			<?if ($arResult["PROPERTIES"]["QUOTE"]["VALUE"]):?>
				<blockquote class="blockquote-alt">
					<div class="blockquote-alt-content">
						<div class="blockquote-alt-text">
							<?=$arResult["PROPERTIES"]["QUOTE"]["~VALUE"]["TEXT"]?>
						</div>
						<?if ($arResult["PROPERTIES"]["AUTHER"]["VALUE"] && $arResult["PROPERTIES"]["POSITION"]["VALUE"] && $arResult["PROPERTIES"]["CITY"]["VALUE"]):?>
							<div class="blockquote-alt-author">
								<p><strong><?=$arResult["PROPERTIES"]["AUTHER"]["VALUE"]?>,</strong> <?=$arResult["PROPERTIES"]["POSITION"]["VALUE"]?>, г. <?=$arResult["PROPERTIES"]["CITY"]["VALUE"]?></p>
							</div>
						<?endif;?>
					</div>
				</blockquote>
			<?endif;?>
			
		</div>
	</div>
	
	<?if ($arResult["PROPERTIES"]["DESCRIPTION_QUOTE"]["VALUE"]):?>
        <p><?=$arResult["PROPERTIES"]["DESCRIPTION_QUOTE"]["~VALUE"]["TEXT"]?></p>
	<?endif;?>
	
<?endif;?>