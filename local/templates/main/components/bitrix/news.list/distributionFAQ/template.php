<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
	<div class="faq-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
		<div class="faq-item-ttl">
			<div class="h3"><?=$arItem["NAME"]?></div>
		</div>
		<div class="faq-item-content">
			<?=$arItem["~PREVIEW_TEXT"]?>
		</div>
	</div>
<?endforeach;?>