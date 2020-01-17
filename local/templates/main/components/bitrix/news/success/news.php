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


<main>
    <div class="page-header">
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.detail",
			"brandsImgHeader",
			Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_ELEMENT_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "N",
				"BROWSER_TITLE" => "-",
				"CACHE_GROUPS" => "N",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"ELEMENT_CODE" => "",
				"ELEMENT_ID" => "140",
				"FIELD_CODE" => array("PREVIEW_PICTURE",""),
				"IBLOCK_ID" => "32",
				"IBLOCK_TYPE" => "brends",
				"IBLOCK_URL" => "",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"MESSAGE_404" => "",
				"META_DESCRIPTION" => "-",
				"META_KEYWORDS" => "-",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Страница",
				"PROPERTY_CODE" => array("LEFT_IMG_HEADER","RIGHT_IMG_HEADER",""),
				"SET_BROWSER_TITLE" => "N",
				"SET_CANONICAL_URL" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"STRICT_SECTION_CHECK" => "N",
				"USE_PERMISSIONS" => "N",
				"USE_SHARE" => "N"
			)
		);?>
    </div>
    <div class="page-body">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-4">
                    <div class="page-title page-title-alt page-title-white">
                        <div class="h1"><?$APPLICATION->ShowTitle()?></div>
                    </div>
                </div>
            </div>
            <div class="wide-page-wrapper">
				<?$APPLICATION->IncludeComponent(
					"bitrix:breadcrumb",
					"jobBreadcrumb",
					Array(
						"START_FROM" => "0",
						"PATH" => "",
						"SITE_ID" => "-"
					),
					false
				);?>
                <div class="success-list">
                    <div class="row row-alt">
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"",
							Array(
								"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
								"IBLOCK_ID" => $arParams["IBLOCK_ID"],
								"NEWS_COUNT" => $arParams["NEWS_COUNT"],
								"SORT_BY1" => $arParams["SORT_BY1"],
								"SORT_ORDER1" => $arParams["SORT_ORDER1"],
								"SORT_BY2" => $arParams["SORT_BY2"],
								"SORT_ORDER2" => $arParams["SORT_ORDER2"],
								"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
								"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
								"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
								"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
								"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
								"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
								"SET_TITLE" => $arParams["SET_TITLE"],
								"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
								"MESSAGE_404" => $arParams["MESSAGE_404"],
								"SET_STATUS_404" => $arParams["SET_STATUS_404"],
								"SHOW_404" => $arParams["SHOW_404"],
								"FILE_404" => $arParams["FILE_404"],
								"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
								"CACHE_TYPE" => $arParams["CACHE_TYPE"],
								"CACHE_TIME" => $arParams["CACHE_TIME"],
								"CACHE_FILTER" => $arParams["CACHE_FILTER"],
								"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
								"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
								"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
								"PAGER_TITLE" => $arParams["PAGER_TITLE"],
								"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
								"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
								"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
								"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
								"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
								"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
								"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
								"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
								"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
								"DISPLAY_NAME" => "Y",
								"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
								"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
								"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
								"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
								"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
								"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
								"FILTER_NAME" => $arParams["FILTER_NAME"],
								"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
								"CHECK_DATES" => $arParams["CHECK_DATES"],
							),
							$component,
                            false,
							array('HIDE_ICONS' => "Y")
       
						);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
