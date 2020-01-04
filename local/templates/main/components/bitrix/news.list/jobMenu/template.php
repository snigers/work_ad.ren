<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
	
<ul class="page-menu">
	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<?if ($arItem["PROPERTIES"]["TITLE_FOR_MENU"]["VALUE"] != ""):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<li id="<?= $this->GetEditAreaId($arItem['ID']); ?>"><a href="<?=$arItem["PROPERTIES"]["LINK_FOR_MENU"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["TITLE_FOR_MENU"]["VALUE"]?></a></li>
		<?endif;?>
	
	<?endforeach;?>
</ul>