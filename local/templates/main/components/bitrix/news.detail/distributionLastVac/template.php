<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$arSectionButtons = CIBlock::GetPanelButtons($arResult['IBLOCK_ID'], $arResult['ID'], 0, array('SESSID' => false, 'CATALOG' => true));
$this->AddEditAction($arResult['ID'], $arSectionButtons['edit']['edit_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_EDIT'));
$this->AddDeleteAction($arResult['ID'], $arSectionButtons['edit']['delete_element']['ACTION_URL'], CIBlock::GetArrayByID($arResult['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

<div class="col-12 col-md-8 offset-md-4" id="<?= $this->GetEditAreaId($arResult['ID']); ?>"><a name="vacancies"></a>
	<div class="h2"><?=($arResult["PROPERTIES"]["TITLE_BLOCK"]["~VALUE"]) ? $arResult["PROPERTIES"]["TITLE_BLOCK"]["~VALUE"] : "Последние вакансии"?></div>
	<div class="vac-list vac-list-alt">
		<div class="row">
			<?foreach ($arResult["VAC_LIST"] as $arItem):?>
				<div class="col-12 col-lg-6">
					<a class="vac-tmb" href="#">
						<div class="vac-tmb-header">
							<div class="h3"><?=$arItem["NAME"]?></div>
							<div class="vac-tmb-fav"><img class="svg-inline" src="/layout/images/ico-fav.svg"></div>
						</div>
						<div class="vac-tmb-footer">
							<div class="vac-tmb-place">
								<p><?=$arItem["PROPERTY_DIRECTION_VALUE"]?>, <?=$arItem["PROPERTY_CITY_VALUE"]?></p>
							</div>
							
							<?$img = CFile::ResizeImageGet($arItem["PROPERTY_LOGO_PREVIEW_VALUE"], Array("width" => 55, "height" => 37), BX_RESIZE_IMAGE_EXACT);?>
							<div class="vac-tmb-logo"><img src="<?=$img["src"]?>"></div>
						</div>
					</a>
				</div>
			<?endforeach;?>
		</div>
	</div>
	<div class="all-link-wrapper"><a class="btn btn-2" href="/vacancies/"><?=($arResult["PROPERTIES"]["TITLE_BTN"]["~VALUE"]) ? $arResult["PROPERTIES"]["TITLE_BTN"]["~VALUE"] : "Все вакансии"?></a></div>
</div>
