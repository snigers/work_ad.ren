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
			"vacanciesImgHeader",
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
				"ELEMENT_ID" => "195",
				"FIELD_CODE" => array("PREVIEW_PICTURE",""),
				"IBLOCK_ID" => "34",
				"IBLOCK_TYPE" => "vacancies",
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
			),
			false,
			array('HIDE_ICONS' => "Y")
		);?>
    </div>
    <div class="page-body page-body-grey">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="page-sidebar">
                        <div class="filter">
                            <div class="filter-search-form form-alt">
								<?if($arParams["USE_SEARCH"]=="Y"):?>
                                    <form>
                                        <div class="form-group" id="vac_search_form">
                                            <div class="form-field">
                                                <input type="text" name="vac_search" id="vac_search" placeholder="Найти вакансию" required>
                                            </div>
                                            <div class="form-button">
                                                <button type="submit"></button>
                                            </div>
                                        </div>
                                    </form>
								<?endif?>
                            </div>
                            <div class="list-controls-mob d-block d-md-none">
                                <div class="list-controls-mob-col-1">
                                    <div class="btn btn-filter-mob" data-mob-popup="#filterPopup">Фильтр вакансий</div>
                                </div>
                                <div class="list-controls-mob-col-2">
                                    <div class="sort-wrapper-mob"></div>
                                </div>
                            </div>
                            <div class="mob-popup" id="filterPopup">
                                <div class="mob-popup-content">
                                    <div class="close"></div>
                                    <div class="mob-popup-header d-block d-md-none">
                                        <div class="h2">Фильтр</div>
                                    </div>
                                    <div class="filter-form form-alt" id="filter_vacancies" data-filter="<?=$str = getFiltersSTR($_REQUEST["arrFilter_pf"])?>">
                                        <?if($arParams["USE_FILTER"]=="Y"):?>
                                            <?$APPLICATION->IncludeComponent(
                                                "bitrix:catalog.filter",
                                                "",
                                                Array(
                                                    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                                                    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                                                    "FILTER_NAME" => $arParams["FILTER_NAME"],
                                                    "FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
                                                    "PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
                                                    "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                                                    "CACHE_TIME" => $arParams["CACHE_TIME"],
                                                    "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                                                    "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                                                ),
                                                $component
                                            );
                                            ?>
                                            <br />
                                        <?endif?>
                                        <div class="d-block d-md-none">
                                            <div class="btn btn-1 btn-close">Применить фильтр</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 offset-md-1">
                    <div class="page-content-wrapper page-content-wrapper-grey">
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
                        <div class="page-title page-title-alt page-title-grey">
                            <h1><?$APPLICATION->ShowTitle(false);?></h1>
                        </div>
                        <div class="vac-wrapper">
                            <div class="vac-l" data-perpage="<?=$_REQUEST["per_page"]?>" data-sort-num="<?=$_REQUEST["sort_num"]?>">
                                <div class="list-controls form-alt">
                                    <div class="list-controls-l">
                                        <div class="sort-wrapper">
                                            <div class="form-group sort-wrapper-group">
                                                <div class="form-item-sort">
                                                    <div class="select-sort-name">Сортировка:</div>
                                                    <select class="select-sort" name="controls_sort" id="controls_sort">
                                                        <option value="1">По умолчанию</option>
                                                        <option value="2">Сначала новые</option>
                                                        <option value="3">Сначала старые</option>
                                                    </select>
                                                </div>
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
                                    <?$sort = getSortVacancies($_REQUEST["sort_num"]);?>
                                    <?if ($_REQUEST["cityxml"]):?>
                                        <?$GLOBALS['arrFilter'] = array("PROPERTY_CITY" => $_REQUEST["cityxml"])?>
                                    <?endif;?>
                                    <?if ($_REQUEST["direction"]):?>
                                        <?$GLOBALS['arrFilter'] = array("PROPERTY_DIRECTION_VALUE" => $_REQUEST["direction"])?>
                                    <?endif;?>
                                    <?if ($_REQUEST["type_employment"]):?>
                                        <?$GLOBALS['arrFilter'] = array("PROPERTY_TYPE_EMPLOYMENT_VALUE" => $_REQUEST["type_employment"])?>
                                    <?endif;?>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:news.list",
                                        "vacanciesList",
                                        Array(
                                            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                                            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                                            "NEWS_COUNT" => ($_REQUEST["per_page"])?$_REQUEST["per_page"]:$arParams["NEWS_COUNT"],
                                            "SORT_BY1" => ($sort["sort_by"])?$sort["sort_by"]:$arParams["SORT_BY1"],
                                            "SORT_ORDER1" => ($sort["sort_order"])?$sort["sort_order"]:$arParams["SORT_ORDER1"],
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
//                                            "FILTER_NAME" => $arParams["FILTER_NAME"],
                                            "FILTER_NAME" => "arrFilter",
                                            "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
                                            "CHECK_DATES" => $arParams["CHECK_DATES"],
                                        ),
                                        $component
                                    );?>
                                    

                            </div>
                            <div class="vac-r">
                                <div class="vac-num">
                                    <div class="vac-num-inner">963</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



